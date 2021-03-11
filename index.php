<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;

require __DIR__ . '/autoload.php';


$upd = new Product();
// $upd->id = 3;
$upd->title = 'update write';
$upd->price = 555;
$upd->update(3);




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