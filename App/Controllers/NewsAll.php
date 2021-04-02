<?php

namespace App\Controllers;
use App\Models\View;


class NewsAll extends IndexCtrl {

    public function actionNewsAll() {
        $this->view -> news = \App\Models\News::getAll();
        $this->view -> display(__DIR__ . '/../../Views/allNews.php');
    }


}