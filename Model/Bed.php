<?php

require_once __DIR__ . '/Product.php';

class Bed extends Product {
    public $size;

    function __construct(string $_name, string $_description, float $_price, Category $_category, string $_size) {
        parent::__construct($_name, $_description, $_price, $_category);
        $this->size = $_size;
    }
}

