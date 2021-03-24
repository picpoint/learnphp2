<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;
use App\Models\View;

require __DIR__ . '/autoload.php';










/**
 * Задание 2.
 * методы __get, __set, __isset вынесены в trait ViewTrate
 * 
 * $view = new View();
 * $view -> products = Product::getAll();
 * $view -> services = Service::getAll();
 * $view -> display(__DIR__ . '/Views/showTables.php');
 */




/**
 * Таблица с данными продуктов и сервисов
 */
/*
$view = new View();
$view -> data['products'] = Product::getAll();
$view -> data['services'] = Service::getAll();
$view -> display(__DIR__ . '/Views/showTables.php');
*/



