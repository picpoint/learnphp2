<?php

require __DIR__ . '/../autoload.php';



$allnews = App\Models\News::getAll();

foreach($allnews as $nws) {
    foreach($nws as $key => $value) {
        $id;

        if ($key == 'id') {
            $id = $value;
        }
        
        if($key == 'headline') {
            echo("<a href=" . "?id=$id" . " >$value</a>");
            echo("<br>");
            echo("<br>");
        }
    }
}