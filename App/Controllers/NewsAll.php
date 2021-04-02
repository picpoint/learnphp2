<?php

namespace App\Controllers;
use App\Models\View;


class NewsAll {

    protected $view;

    public function __construct() {
        $this->view = new View();
    }



    public function actionNewsAll() {
        $this->view -> pst = 'SOME POST';
        $this->view -> display(__DIR__ . '/../../Views/allNews.php');
    }


}