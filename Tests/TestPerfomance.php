<?php

namespace Tests;
use App\Model;


class TestPerfomance extends Model {

    public static $table = 'articles';
    public static $arr = ['id' => '3'];
    public $title;
    public $content;    

    // public static $arr = []; переменная для теста в Model
    // $sql = "SELECT * FROM " . static::$table . " WHERE id = " . static::$arr['id'];   // запрос для Model для теста запроса
    

}

