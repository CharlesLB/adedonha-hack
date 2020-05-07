<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Word extends DataLayer
{
    public function __construct()
    {
        parent::__construct("words", ["name", "id_category"]);
    }
}