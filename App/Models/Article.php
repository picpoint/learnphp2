<?php

namespace App\Models;
use App\Model;



class Article extends Model {
  public const TABLE = 'article';

  public $title;
  public $content;  


  public function getModelName() {
    return "Article";
  }


}