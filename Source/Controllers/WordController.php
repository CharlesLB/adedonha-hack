<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\Category;
use Source\Models\Word;

class WordController
{
    private $view;

    public function __construct($router) 
    {
        $this->view = Engine::create(__DIR__ . "/../../Views", "php");
        $this->view->addData(["router" => $router]);
    }

    public function show(array $data = null, int $category_id = null,  string $message = null): void
    {
        if(!$category_id){
            $category = new Category();
            $category = $category->show($data["category_name"]);
            $category_id = $category->id;
            $callback["wordForm"] = $this->view->render("admin/fragments/wordForm", ["category_id" => $category_id]);
        }

        if($message){
            $callback["message"] = $message;
        }

        $word = new Word();
        $words = $word->list($category_id);

        $callback["wordList"] = $this->view->render("admin/fragments/wordList", ["words" => $words ]);

        echo json_encode($callback);
    }

    public function create(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);

        $word = new Word();
        $word->name = $data["name"];
        $word->id_category = $data["id_category"];

        if (!$word->validate()) {
            $callback["message"] = message($word->fail()->getMessage(), "error");
            echo json_encode($callback);
            return;
        }

        $word->save();

        $message = message("Palavra " . $word->name . " cadastrada com sucesso!", "success");
        
        if($message){
            $callback["message"] = $message;
        }

        $words = $word->list($word->id_category);

        $callback["wordList"] = $this->view->render("admin/fragments/wordList", ["words" => $words ]);

        echo json_encode($callback);
    }

    public function delete(array $data): void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }

}