<?php

namespace App;



abstract class Model {

    public static $table = '';
    public static $arr = [];
    public $id;



    public static function getAll() {
        $db = new Db();
        // $class = get_called_class();
        $sql = "SELECT * FROM " . static::$table;
        return $db->query($sql, static::class);
    }



    public static function findById($id) {
        $db = new Db();
        $sql = "SELECT * FROM " . static::$table . " WHERE id = " . $id;
        $resFind = $db->query($sql, static::class, static::$arr);

        if(!empty($resFind)) {
            return $resFind;
        } else {
            return "false";
        }

    }


    public static function getNLatestNews($quantity) {
        $db = new Db();
        $sql = "(SELECT * FROM " . static::$table . " ORDER BY id DESC limit " . $quantity . ") ORDER BY id ASC";          // DESC - отсортирует по убыванию 3, 2, 1 
        return $db->query($sql, static::class, $arr);                                                                      // ASC - отсортирует по возрастанию 1, 2, 3
    }


    public function save() {
        $db = new Db();
        $props = get_object_vars($this);
        $keys = [];
        $values = [];
        
        foreach($props as $key => $value) {
            if($key == 'id') {
                continue;
            }
            $keys[] = $key;
            $values[] = $value;
        }
        
        // $sql = "INSERT INTO " . static::$table . " (title, price) VALUES (2, 3)";
        // $db->insert("INSERT INTO `products`(`title`, `price`) VALUES ('test goods', 10000)");
        $sql = 'INSERT INTO ' . static::$table . ' (' . implode(', ', $keys) . ') VALUES (' . implode(', ', $values) . ')';
        
        echo($sql);
        echo("<br>");
        print_r($keys);
        echo("<br>");
        print_r($values);
        // die;
        $db->insert($sql);
    }

    

    /*
    public function insert() {
        $db = new Db();
        $props = get_object_vars($this);
        $sql = "INSERT INTO " . static::$table . " (title, price) VALUES (" . $props['title'] . ", " . $props['price'] . " ) ";
        // $sql = "INSERT INTO " . static::$table . " (title, price) VALUES ('4', '5' ) ";
        return $db->execute($sql);        
    }
    */



}