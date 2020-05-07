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

    public function home(): void
    {
        $categories = (new Category())->find()->order("name")->fetch(true);

        echo $this->view->render("admin/home", [
            "title" => "Home | " . SITE,
            "categories" => $categories
        ]);
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
}