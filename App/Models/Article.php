<?php

namespace App\Models;
use App\Model;


class Article extends Model {

    public static $table = 'articles';    

    public $title;
    public $content;


}