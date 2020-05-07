<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\Category;

class Web
{
    private $view;

    public function __construct($router) 
    {
        $this->view = Engine::create(__DIR__ . "/../../Views", "php");
        $this->view->addData(["router" => $router]);
    }

    //
    // ─── WEB ────────────────────────────────────────────────────────────────────────
    //


    public function home(): void
    {
        $categories = (new Category())->find()->order("name")->fetch(true);

        echo $this->view->render("admin/home", [
            "title" => "Home | " . SITE,
            "categories" => $categories
        ]);
    }


    //
    // ─── ADMIN ──────────────────────────────────────────────────────────────────────
    //

        
    public function category(): void
    {
        $categories = (new Category())->find()->order("name")->fetch(true);

        echo $this->view->render("admin/category", [
            "title" => "Categoria | " . SITE,
            "categories" => $categories
        ]);
    }

    public function error(array $data): void
    {
        echo $data["errcode"];
    }
}