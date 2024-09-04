<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../Model/Category.php';
require_once __DIR__ . '/../Model/Food.php';
require_once __DIR__ . '/../Model/Bed.php';
require_once __DIR__ . '/../Model/Toy.php';

$categories = [
    new Category("Cani", "Prodotti specifici per cani", "Short", "Medium"),
    new Category("Gatti", "Prodotti specifici per gatti", "Long", "Small"),
    new Category("Cani e Gatti", "Prodotti per entrambi")
];

$dogCategory = $categories[0];
$catCategory = $categories[1];
$genericCategory = $categories[2];

$products = [
    new Food("Croccantini Premium", "Cibo per cani di alta qualità", 25.99, $dogCategory, "High Protein"),
    new Toy("Pallina da gioco", "Pallina resistente per cani", 5.99, $dogCategory, "Rubber"),
    new Bed("Cuccia Morbida", "Cuccia comoda e morbida per gatti e cani", 35.99, $genericCategory, "Large"),
    new Toy("Giochino per Gatti", "Giochino con piume per gatti", 7.99, $catCategory, "Feather"),
    new Bed("Cuccia Comoda per Cani", "Cuccia comoda per cani", 40.00, $dogCategory, "Medium"),
    new Food("Cibo per Gatti Gourmet", "Cibo gourmet per gatti con ingredienti pregiati", 30.00, $catCategory, "Gourmet")
];