<?php
//error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;
use App\Models\View;

require __DIR__ . '/autoload.php';



print_r($_SERVER['REQUEST_URI']);
die;

$nws = new App\Controllers\News();
$action = $_GET['action'] ?: 'Index';
$nws -> action($action);

//$allNws -> actionAllNews();
//$allNws -> actionOne($_GET['id']);




/**
 * задание 2.1
 
 * контроллер для одной новости
 * $oneNews = new App\Controllers\NewsOne();
 * $oneNews -> actionOneNews();

 * контроллер для всех новостей
 * $allnews = new App\Controllers\NewsAll();
 * $allnews -> actionNewsAll();
 * 
 */




/**
 * задание 1
 * написан клас контроллера сделан метод action($action)
 * 
 * $ctrl = new App\Controllers\IndexCtrl();
 * $ctrl -> action('Index');
 */
