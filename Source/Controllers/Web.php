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

        echo $this->view->render("web/home", [
            "title" => SITE,
            "categories" => $categories
        ]);
    }

    public function app(): void
    {
        echo $this->view->render("web/app", [
            "title" => "App | " . SITE,
        ]);
    }

    public function error(array $data): void
    {
       echo $this->view->render("web/error", [
            "title" => "Error | " . $data["errcode"],
            "error" => $data["errcode"]
        ]);
    }

    //
    // ─── ADMIN ──────────────────────────────────────────────────────────────────────
    //

    public function admin(): void
    {
        $categories = (new Category())->find()->order("name")->fetch(true);

        echo $this->view->render("admin/home", [
            "title" => "Home | " . SITE,
            "categories" => $categories
        ]);
    }

    public function word(): void
    {
        $categories = (new Category())->find()->order("name")->fetch(true);

        echo $this->view->render("admin/word", [
            "title" => "Palavras | " . SITE,
            "categories" => $categories
        ]);
    }
}