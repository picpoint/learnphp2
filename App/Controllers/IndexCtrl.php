<?php

namespace App\Controllers;
use App\Models\View;


class IndexCtrl {

    protected $view;

    public function __construct() {
        $this->view = new View();
    }


    public function action($action) {
        $method = 'action' . $action;
        return $this->$method();
    }


    public function actionIndex() {
        $this->view -> headline = 'Zagolovok posta';
        $this->view -> content = 'Telo posta';
        $this->view -> display(__DIR__ . '/../../Views/index.php');
    }



}