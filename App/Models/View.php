<?php

// require __DIR__ . '/../../autoload.php';

namespace App\Models;
use App\Model;



class View extends Model /*implements Countable*/ {

    /**
     * добавлены 3 с-ва __set, __get, __isset в трейт
     *  далее трейт ViewTrate добавляется в коде
     */
    use ViewTrate;

    public $data = [];


    public function display(string $template) {
        include $template;
    }


    public function count() {
        return count($this->data);
    }



}