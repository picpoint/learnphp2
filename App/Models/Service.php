<?php

namespace App\Models;
use App\Model;


class Service extends Model implements HasPrice {

    use HasPriceTrate;

    public $title;
    public static $table = 'services';

    
    
}