<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\Word;

class Web
{
    private $view;

    public function __construct() 
    {
        $this->view = Engine::create(__DIR__ . "/../../Views", "php");
    }

    public function home(): void
    {
        $words = (new Word())->find()->fetch(true);
        
        echo $this->view->render("web/home", [
            "title" => "Home | " . SITE,
            "words" => $words
        ]);
    }

    public function error(array $data): void
    {
        echo $data["errcode"];
    }
}