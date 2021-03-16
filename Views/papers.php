<?php

require __DIR__ . '/../autoload.php';

$papers = \App\Models\Paper::getAll();


foreach($papers as $paper) {
    foreach($paper as $key => $value) {
        // echo("$key - $value");
        // echo("<br>");
        
        if($key == 'id') {
            $id = $value;
        }
        
        if($key == 'heading') {
            echo("<a href=" . "papr.php?id=$id" . ">$value</a>");
        }

    }
    echo("<br>");
    echo("<br>");

}


?>


<form action="" method="post">
    <input type="text">
    <textarea name="ppr" id="" cols="30" rows="10"></textarea>
</form>