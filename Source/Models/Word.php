<?php

namespace Source\Models;

use CoffeeCode\DataLayer\Connect;
use CoffeeCode\DataLayer\DataLayer;
use Exception;

class Word extends DataLayer
{
    public function __construct()
    {
        parent::__construct("words", ["name", "id_category"]);
    }

    public function validate(): bool
    {
        if (empty($this->name)){
            $this->fail = new Exception("Insira o nome da categoria!");
            return false;
        }

        if (empty($this->id_category)){
            $this->fail = new Exception("Parece que a categoria não foi muito bem definida!");
            return false;
        }

        $wordByName = $this->find("name = :name", "name={$this->name}")->count();
        if($wordByName){
            $this->fail = new Exception("Esta palavra já foi cadastrada nesta categoria!");
            return false;
        }
            
        return true;
    }

    public function list(int $id): ?array
    {
        $search = $this->find("id_category = :id_category", "id_category={$id}")->fetch(true);
        return $search;
    }

    public function findWordToAnswer(string $letter, int $category_id): ?string
    {
        $conn = Connect::getInstance();
        $query = $conn->query("SELECT name FROM words WHERE SUBSTR(name,1,1) = '$letter' AND id_category = '$category_id'");
        $word = $query->fetch();

        if ($word) {
            $word = $word->name;
        }else{
            $word = "Nenhuma palavra encontrada";
        }

        return $word;
    }
}