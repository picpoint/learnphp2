<?php

namespace App\Models;
use App\Model;


class Service extends Model implements HasPrice {


    public $title;
    public static $table = 'services';

    public function getPrice() {
        
    }

    
    
}