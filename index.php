<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;
use App\Models\View;

require __DIR__ . '/autoload.php';


$onNws = new App\Controllers\NewsAllAdmin();
$onNws -> actionOne($_GET['id']);



//$admNews = new App\Controllers\NewsAllAdmin();
//$admNews -> actionNewsAllAdmin();






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
