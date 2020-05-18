<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

class Category extends DataLayer
{
    public function __construct()
    {
        parent::__construct("categories", ["name"]);
    }

    public function validate(): bool
    {
        if (empty($this->name)){
            $this->fail = new Exception("Insira o nome da categoria!");
            return false;
        }

        $categoryByName = $this->find("name = :name", "name={$this->name}")->count();
        if($categoryByName){
            $this->fail = new Exception("Categoria já cadastrada!");
            return false;
        }
            
        return true;
    }

    public function show(string $name): ?object
    {
        $search = $this->find("name = :name", "name={$name}")->fetch();

            $this->name = $name;
            $this->id = $search->data()->id;

            return $this;
    }
}