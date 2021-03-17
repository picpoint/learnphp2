<?php

require __DIR__ . '/../autoload.php';

$papers = \App\Models\Paper::getAll();



if(isset($_POST['pprsend'])) {
    if (!empty($_POST['pprtitl']) && !empty($_POST['pprcont'])) {
        $sv = new \App\Models\Paper();
        $sv -> heading = $_POST['pprtitl'];
        $sv -> content = $_POST['pprcont'];
        $sv -> save();
        header ('Location: papers.php');
    }        
        
}



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



<form method="post">
    <input type="text" placeholder="заголовок" name="pprtitl">
    <br>
    <br>
    <textarea name="pprcont" id="" cols="30" rows="10"></textarea>
    <br>
    <button type="submit" name="pprsend">ОТПРАВИТЬ</button>
</form>

