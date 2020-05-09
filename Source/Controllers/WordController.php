<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\Category;

class WordController
{
    private $view;

    public function __construct($router) 
    {
        $this->view = Engine::create(__DIR__ . "/../../Views", "php");
        $this->view->addData(["router" => $router]);
    }

    public function show(array $data): void
    {
        $category = $this->prepareToShow($data);
        
        $callback["wordForm"] = $this->view->render("admin/fragments/wordForm", ["category" => $category]);
        $callback["wordList"] = $this->view->render("admin/fragments/wordList", ["category" => $category]);

        echo json_encode([$category->data()->name, $category->data()->id]);
    }

    public function create(array $data): void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }

    public function delete(array $data): void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }

    //
    // ─── PRIVATES FUNCTIONS ─────────────────────────────────────────────────────────
    //

    private function prepareToShow(array $data): object
    {
        $categoryData = filter_var_array($data, FILTER_SANITIZE_STRING);
        
        $category = new Category();
        $category->name = $categoryData["category"];

        $search = $category->find("name = :name", "name={$category->name}")->fetch();
        $category->id = $search->data()->id;

        return $category;
    }
}