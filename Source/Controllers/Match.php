<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\Category;
use Source\Models\Word;



class Match
{
    private $view;

    public function __construct($router)
    {
        $this->view = Engine::create(__DIR__ . "/../../Views", "php");
        $this->view->addData(["router" => $router]);
    }

   
    public function start( array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);
        $names = $data["category"];

        

        foreach ($names as $name){
            $category = new Category();

            $categories[] = $category->show($name);

            var_dump($categories);
        }

        echo $this->view->render("web/app", [
            "title" => "App | " . SITE,
            "categories" => $categories
        ]);
    }

    public function search(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);

    }
}
