<?php

namespace App;



abstract class Model {

    public static $table = '';
    public static $arr = [];
    public $id;


    public static function getAll() {
        $db = new Db();
        $class = get_called_class();
        $sql = "SELECT * FROM " . static::$table;
        return $db->query($sql, static::class, $arr);
    }


}