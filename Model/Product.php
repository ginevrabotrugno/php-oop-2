<?php

class Product {

    public $name;
    public $description;
    public $price;
    public $category;
    public $animalType;

    function __construct(string $_name, string $_description, float $_price){
        $this->name = $_name;
        $this->description =$_description;
        $this->price = $_price;
    }

}