<?php

namespace App\Controllers;
use App\Models\View;



class News
{

    protected $view;
    protected $id;

    public function __construct()
    {
        $this->view = new View();
        $this->id = $_GET['id'];
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
        $this->view -> nws = \App\Models\News::findById($this->id);
        $this->view -> display(__DIR__ . '/../../Views/NewsTmpl.php');
    }

    public function actionAdmin() {
        $id = $_GET['id'];
        $this->view -> nws = \App\Models\News::findById($id);
        $this->view -> display(__DIR__ . '/../Templates/adminNews.php');

        if(isset($_POST['btnsave'])) {
            $res = new \App\Models\News();
            $res -> update($id);
        }
    }


}