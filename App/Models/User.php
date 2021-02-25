<?php

namespace App\Models;
use App\Model;


class User extends Model {

    public static $table = 'users';

    public $login;
    public $password;
    
        

}