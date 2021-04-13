<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;
use App\Models\View;

require __DIR__ . '/autoload.php';




$res = -42 / 2;


function someResult($rs) {

    if ($rs < 0) {
        echo "Число должно быть > 0";
        echo "<br>";
    }

    if ($rs % 2 != 0) {
        echo "Число должно быть чётное";
        echo "<br>";
    }

    return $rs;

}


print_r(someResult($res));
















/** @var
 * work with try-catch
 * $nws */

//$nws = new App\Controllers\News();
//$action = $_GET['action'] ?: 'Index';
////$nws -> action($action);


//try {
//    $nws -> action($action);
//} catch (\App\Exeptions\Http404 $e) {
//    var_dump($e->getMessage());
//    echo "<br>";
//    var_dump($e->getCode());
//}





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
