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
        $ks = [];
        $vls = [];
        
        foreach($props as $key => $value) {
            if($key == 'id') {
                continue;
            }

            $ks[] = $key;
            $vls[] = $value;            

        }

        $sql = "INSERT INTO " . static::$table . " (" . implode(", ", $ks) . ") VALUES ('" . implode("', '",  $vls) . "')";
        $db->insert($sql);
        $this->id = $db -> lastId();
    }



    public function update($currentId) {
        $db = new Db();
        $ks = [];
        $vls = [];

        $props = get_object_vars($this);        
        $sqlstr = "";

        foreach($props as $key => $value) {            
            if($key == 'id' && $value == NULL) {
                $value = $currentId;
            }
            
            $ks[] = $key;
            $vls[] = $value;

            $sqlstr = $sqlstr .  " " . $key . " = " . '\'' . $value . '\', '; 
            $resstr = mb_substr($sqlstr, 0, -2);

        }

        $sql = "UPDATE " . static::$table . " SET " . $resstr . " WHERE id=" . $currentId;
        $db->insert($sql);
    }



    public function saves() {
        
    }    



}