<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;
use App\Models\View;

require __DIR__ . '/autoload.php';



$allnews = new App\Controllers\NewsAll();
$allnews -> actionNewsAll();









/**
 * задание 1
 * $ctrl = new App\Controllers\IndexCtrl();
 * $ctrl -> action('Index');
 */
