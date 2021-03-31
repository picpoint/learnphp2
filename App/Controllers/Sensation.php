<?php

namespace App\Controllers;
use App\Models\View;


class Sensation {

    public function actionIndex() {
        $view = new View();
        $view -> title = "Какая то сенсация";
        $view -> news = App\Models\News::getAll();
        $view -> display(__DIR__ . '/../App/Templates/index.php');
    }


}