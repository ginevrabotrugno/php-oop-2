<?php

class Category {
    public $name;
    public $description;
    public $furLength; 
    public $size;      

    function __construct(string $_name, string $_description, string $_furLength = null, string $_size = null) {
        $this->name = $_name;
        $this->description = $_description;
        $this->furLength = $_furLength;
        $this->size = $_size;        
    }
}