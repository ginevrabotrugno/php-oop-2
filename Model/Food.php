<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $dietType; 

    function __construct(string $_name, string $_description, float $_price, Category $_category, string $_dietType) {
        parent::__construct($_name, $_description, $_price, $_category);
        $this->dietType = $_dietType;
    }
}

