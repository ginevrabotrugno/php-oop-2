<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../Model/Category.php';

$categories = [
    new Category("Cani", "Prodotti specifici per cani", "Short", "Medium"),
    new Category("Gatti", "Prodotti specifici per gatti", "Long", "Small"),
    new Category("Cani e Gatti", "Prodotti per entrambi")
];

$dogCategory = $categories[0];
$catCategory = $categories[1];
$genericCategory = $categories[2];

$products = [
    new Product("Croccantini Premium", "Cibo per cani di alta qualità", 25.99, $dogCategory),
    new Product("Pallina da gioco", "Pallina resistente per cani", 5.99, $dogCategory),
    new Product("Tiragraffi", "Tiragraffi per gatti con giocattolo integrato", 15.99, $catCategory),
    new Product("Cuccia Morbida", "Cuccia comoda e morbida per gatti e cani", 35.99, $genericCategory),
    new Product("Giochino per Gatti", "Giochino con piume per gatti", 7.99, $catCategory)
];
