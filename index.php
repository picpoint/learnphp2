<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;
use App\Models\View;

require __DIR__ . '/autoload.php';


/**
 * Ссылка на задание новостей
 */
/*
?>

<a href="/03/Views/news.php">Views</a>

<?php
*/









/**
 * Задание 2.
 * методы __get, __set, __isset вынесены в trait ViewTrate
 */
 
// $view = new View();
// $view -> products = Product::getAll();
// $view -> services = Service::getAll();
// $view -> display(__DIR__ . '/Views/showTables.php');


/**
 * Задание 6*
 */
// echo("<br>");
// echo("Вывод счетчика через интерфейс Countable");
// echo("<br>");
// print_r($view -> count());


// echo("<br>");
// echo("<br>");
// echo("<br>");
// echo("Вывод итераций через интерфейс Iterator");
// echo("<br>");
// echo("<br>");


// foreach($view as $key => $value) {    
//     var_dump("$key - $value");
//     echo("<br>");
// }
 




/**
 * Таблица с данными продуктов и сервисов
 */
/*
$view = new View();
$view -> data['products'] = Product::getAll();
$view -> data['services'] = Service::getAll();
$view -> display(__DIR__ . '/Views/showTables.php');
*/



