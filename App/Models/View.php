<?php

namespace App\Models;

// include __DIR__ . '/../../autoload.php';


class View {

    public $data = [];


    public function display(string $template) {
        include $template;
    }


}