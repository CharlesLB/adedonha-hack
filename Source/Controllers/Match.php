<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\Category;
use Source\Models\Word;
use Exception;


class Match
{
    private $view;
    private $error;

    public function __construct($router)
    {
        $this->view = Engine::create(__DIR__ . "/../../Views", "php");
        $this->view->addData(["router" => $router]);
    }

    public function search(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);

        if (!$this->validate($data)) {
            $callback["message"] = message($this->error->getMessage(), "error");
            echo json_encode($callback);
            return;
        }

        $letter = strtoupper($data["letter"]);
        $categories = $this->findCategories($data["categories"]);

        foreach($categories as $category){
            $answer = $this->answer($letter, $category);
            $answers[] = $answer;
        }

        $callback["table"] = $this->view->render("web/fragments/table", ["answers" => $answers ]);
        echo json_encode($callback);
    }

    //
    // ─── PRIVATE FUNCTIONS ──────────────────────────────────────────────────────────
    //

    private function validate(array $data): bool
    {
        if(!$data["categories"]===null){
            $this->error = new Exception("Selecione as categorias");
            return false;
        }

        if(!$data["letter"]){
            $this->error = new Exception("Escolha uma letra");
            return false;
        }

        $category = new Category;

        foreach($data["categories"] as $name){
            $category->name = $name;
            if(!$category->matchValidade()){
                $category->matchValidade();
                $this->error = new Exception($category->fail);
                return false;
            }
        }
            
        return true;
    }

    private function findCategories(array $data): array
    {
        foreach ($data as $name){
            $category = new Category;
            $categories[] = $category->show($name);
        }

        return $categories;
    }

    private function answer(string $letter, object $category): array
    {
        $word = new Word;
        $word = $word->findWordToAnswer($letter, $category->id);
        
        $answer= [
            "category" => $category->name,
            "word" => $word
        ];

        return $answer;
    }
}
