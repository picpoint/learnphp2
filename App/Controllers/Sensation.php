<?php

namespace App\Controllers;
use App\Models\View;
use App\Models\News;


class Sensation {

    protected $view;

    public function __construct() {
        $this->view = new View();
    }



    public function actionIndex() {        
        $this->view -> headline = "Какая то сенсация";
        $this->view -> content = News::getAll();
        $this->view -> display(__DIR__ . '/../Templates/index.php');
    }


}