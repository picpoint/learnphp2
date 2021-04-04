<?php

namespace App\Controllers;
use App\Models\View;



class News
{

    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }


    public function action($action) {
        $methName = 'action' . $action;
        return $this->$methName();
    }

    public function actionIndex() {
        $this->view -> nws = \App\Models\News::getAll();
        $this->view ->display(__DIR__ . '/../../Views/NewsTmpl.php');
    }


    public function actionOne() {
        $id = $_GET['id'];
        $this->view -> nws = \App\Models\News::findById($id);
        $this->view -> display(__DIR__ . '/../../Views/NewsTmpl.php');
    }


}