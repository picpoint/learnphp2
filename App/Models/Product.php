<?php

namespace App\Models;
use App\Model;


class Product extends Model implements HasPrice, HasTitle {

    use HasPriceTrate;

    public $title;    
    public static $table = 'products';


    public function getTitle() {
        echo $this->title;
    }


}
