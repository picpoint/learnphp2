<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;

require __DIR__ . '/autoload.php';







// task 3
/*
$prod = new Product();
$prod -> title = "New record";
$prod -> price = 123456;
$prod -> saves(1);
*/




// task 2.1
/*
$upd = new Product();
$upd->title = 'Black Berry';
$upd->price = 23000;
$upd->update(1);
*/



// task 2.2
/*
$product = new Product();
$product->title = 'Yota Phone X';
$product->price = 35000;
$product->save();
var_dump($product);
*/



// task 1
/*
$config = new App\Conf;
echo($config -> data()['db']['host']);
*/













// Work with activeRecord
/*
$product = new Product();
$product->title = "Testing goods";
$product->price = 12345;
$product->insert();
*/


// Work with interfqce and trate
/*
function showPrice(HasPrice $item) {
    echo $item -> getPrice();
    echo("<br>");
    echo $item -> getTitle();
}

$item = new Product();
$item->price = 43;
$item->title = "BQ";

showPrice($item);
*/