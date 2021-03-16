<?php

require __DIR__ . '/../autoload.php';

// echo("one paper page");
// echo("<br>");
// echo("<br>");

echo($_GET['id']);
echo("<br>");
echo("<br>");


$findOne = \App\Models\Paper::findById($_GET['id']);

foreach($findOne as $fon) {
    foreach($fon as $key => $value) {
        if ($key == 'id') {
            continue;
        }

        if($key == 'heading') {
            echo("<b>$value</b>");
            echo("<br>");
            echo("<br>");
            continue;
        }

        echo($value);
    }

}