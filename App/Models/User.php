<?php

namespace App\Models;
use App\Model;



class User extends Model {

  public const TABLE = 'users';

  public $login;
  public $password;
  
  public function getModelName() {
    return "Users";
  }


}