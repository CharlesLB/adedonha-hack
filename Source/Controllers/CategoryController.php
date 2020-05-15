<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\Category;

class CategoryController
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
        $categoryData = filter_var_array($data, FILTER_SANITIZE_STRING);

        $category = new Category();
        $category->name = $categoryData["name"];

        if (!$category->validate()) {
            $callback["message"] = message($category->fail()->getMessage(), "error");
            echo json_encode($callback);
            return;
        }

        $category->save();
        $callback["category"] = $this->view->render("admin/fragments/category", ["category" => $category]);
        $callback["message"] = message("Categoria cadastrada com sucesso!", "success");
        echo json_encode($callback);
    }

    public function delete(array $data): void
    {
        if (empty($data["id"])) {
            return;
        }

        $id = filter_var($data["id"], FILTER_VALIDATE_INT);
        $category = (new Category())->findById($id);
        if ($category) {
            $category->destroy();
        }

        $callback["remove"] = true;
        echo json_encode($callback);
    }
}
