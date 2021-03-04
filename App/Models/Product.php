<?php

namespace App\Models;
use App\Model;


class Product extends Model implements HasPrice {

    public $title;
    public $price;    
    public static $table = 'products';


    public function getPrice() {

    }


}
