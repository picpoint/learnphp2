<?php

require __DIR__ . '/../autoload.php';

namespace App\Models;



class View {

    /**
     * добавлены 3 с-ва __set, __get, __isset в трейт
     *  далее трейт ViewTrate добавляется в коде
     */
    use ViewTrate;

    public $data = [];


    public function display(string $template) {
        include $template;
    }



}