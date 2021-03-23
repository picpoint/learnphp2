<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;
use App\Models\View;

require __DIR__ . '/autoload.php';




$view = new View();
$view -> data['products'] = Product::getAll();
$view -> data['services'] = Service::getAll();
$view -> display(__DIR__ . '/Views/showTables.php');




