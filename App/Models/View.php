<?php

namespace App\Models;



class View {

    public $data = [];


    public function display(string $template) {
        include $template;
    }


}