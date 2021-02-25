<?php

namespace App\Model;
use App\Db;


class User {

    public $id;
    public $login;
    public $password;

    
    public function getAllUsers() {
        $db = new Db();
        $res = $db->query("SELECT * FROM users");
        print_r($res);
    }
    



    

}