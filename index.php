<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;

require __DIR__ . '/autoload.php';


function showPrice(HasPrice $item) {
    echo $item -> getPrice();
    echo("<br>");
    echo $item -> getTitle();
}

$item = new Product();
$item->price = 43;
$item->title = "BQ";

showPrice($item);
