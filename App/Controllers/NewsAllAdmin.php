<?php

namespace App\Controllers;



class NewsAllAdmin extends IndexCtrl {

    public function actionNewsAllAdmin() {
        $this->view -> nwsAdm = \App\Models\News::getAll();
        $this->view -> display(__DIR__ . '/../../Views/AllNewsAdmin.php');
    }


    public function actionOne($id) {
        $this->view -> nwsAdm = \App\Models\News::findById($id);
        $this->view -> display(__DIR__ . '/../../Views/allNewsAdmin.php');
    }


}