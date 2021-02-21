<?php

namespace App;


class Model {

  public $id;


  public static function findAll() {
    $db = new Db();
    return $db -> query('SELECT * FROM news', [], self::class);
  }
  


}