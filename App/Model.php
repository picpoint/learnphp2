<?php

namespace App;



abstract class Model {

    public static $table = '';
    public static $arr = [];
    public $id;



    public static function getAll() {
        $db = Db::instance();
        // $class = get_called_class();
        $sql = "SELECT * FROM" . static::$table;
        $res = $db->query($sql, static::class);

        if (!$res) {
            throw new \App\Exeptions\Http404();
        }

        return $res;

    }



    public static function findById($id) {
        $db = new Db();
        $sql = "SELECT * FROM " . static::$table . " WHERE id = " . $id;
        $resFind = $db->query($sql, static::class, static::$arr);

        if(!empty($resFind)) {
            return $resFind;
        } else {
            throw new \Exception('!!! ERR SQL QUERY M->FINDBYID', '419');
        }

    }


    /**
     * Добавлен новый метод, т.к была заведена таблица с полем author_id
     */
    public static function findByIdAuthr($id) {
        $db = new Db();
        $sql = "SELECT * FROM " . static::$table . " WHERE author_id = " . $id;
        $resFind = $db->query($sql, static::class, static::$arr);

        if(!empty($resFind)) {
            return $resFind;
        } else {
            throw new \Exception('!!! ERR SQL REQUEST M->FINDBYIDAUTHOR');
        }

    }



    public static function getNLatestNews($quantity) {
        $db = new Db();
        $sql = "(SELECT * FROM " . static::$table . " ORDER BY id DESC limit " . $quantity . ") ORDER BY id ASC";          // DESC - отсортирует по убыванию 3, 2, 1 
        $res = $db->query($sql, static::class, $arr);                                                                      // ASC - отсортирует по возрастанию 1, 2, 3

        if(!$res) {
            throw new \Exception('!!! ERR SQL QUERY M->GETNLATESTNEWS');
        }

        return $res;
    }



    public function save() {
        $db = Db::instance();
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
        $res = $db->insert($sql);

        if(!$res) {
            throw new \Exception('!!! ERR UPDATE M->UPDATE', 419);
        }

        return $res;

    }



    public function saves($currentId) {
        $db = new Db();
        $this->id = $currentId;
        echo($this->id);

        if($this->id == 0) {
            $this->save();
        } else {
            $this->update($currentId);
        }
    }    



    public function delete($id) {
        $db = new Db();
        $sql = "DELETE FROM " . static::$table . " WHERE id=" . $id;
        $res = $db->execute($sql);

        if(!$res) {
            throw new \Exception('!!! ERR DELETE M->DELETE', 419);
        }

    }



    public function fill(array $data) {

    }




}