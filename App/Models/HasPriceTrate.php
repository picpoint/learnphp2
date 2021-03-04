<?php

namespace App\Models;



trait HasPriceTrate {

    public $price;

    public function getPrice() {
        echo($this->price);
    }



}