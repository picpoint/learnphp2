<?php
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';

$product = \App\Models\Product::getAll();
print_r($product);

echo("<br>");
echo("<br>");
echo("<br>");

$service = \App\Models\Service::getAll();
print_r($service);

