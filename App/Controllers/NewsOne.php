<?php

namespace App\Controllers;
use App\Models\View;
use App\Models\News;


class NewsOne {

    protected $view;

    public function __construct() {
        $this->view = new View();
    }



    public function actionOneNews() {
        $this->view -> oneNews = News::findById($_GET['id']);
        $this->view -> display(__DIR__ . '/../../Views/oneNews.php');        
    }


}