<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product {
    public $material; 

    function __construct(string $_name, string $_description, float $_price, Category $_category, string $_material) {
        parent::__construct($_name, $_description, $_price, $_category);
        $this->material = $_material;
    }
}
