<?php

namespace App;



abstract class Model {

    public static $table = '';
    public $id;


    public static function getAll() {
        $db = new Db();
        $arr = [];
        $class = get_called_class();
        $sql = "SELECT * FROM " . static::$table;
        return $db->query($sql, static::class, $arr);
    }


}