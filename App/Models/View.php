<?php

// require __DIR__ . '/../../autoload.php';

namespace App\Models;
use App\Model;



class View extends Model implements \Countable, \Iterator {

    /**
     * добавлены 3 с-ва __set, __get, __isset в трейт
     *  далее трейт ViewTrate добавляется в коде
     */
    use ViewTrate;

    public $data = [];
    private $position = 0;
    private $array = ["firstElem, secondElem, thirdElem"];


    public function display(string $template) {
        include $template;
    }


    /**
     * добавлен метод count для интерфейса Countable
     */
    public function count() {
        return count($this->data);
    }


    /**
     * Добавлены 5 методов rewind, current, key, next, valid для интерфейса Iterator
     */

    public function __construct() {
        $this->position = 0;
    }


    public function rewind() {
        var_dump(__METHOD__);
        echo("<br>");
        $this->position = 0;
    }


    public function current() {
        var_dump(__METHOD__);
        echo("<br>");
        return $this->array[$this->position];
    }

    
    public function key() {
        var_dump(__METHOD__);
        echo("<br>");
        return $this->position;
    }


    public function next() {
        var_dump(__METHOD__);
        echo("<br>");
        ++$this->position;
    }


    public function valid() {
        var_dump(__METHOD__);
        echo("<br>");
        return isset($this->array[$this->position]);
    }





}