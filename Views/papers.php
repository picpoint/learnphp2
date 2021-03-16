<?php

require __DIR__ . '/../autoload.php';

$papers = \App\Models\Paper::getAll();
// var_dump($papers);


foreach($papers as $paper) {
    foreach($paper as $key => $value) {
        echo("$key - $value");
        echo("<br>");        
        
        if($key == 'heading') {
            echo("<a href=" . $value . ">$value</a>");
        }

    }
    echo("<br>");

}