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
    <input type="text" placeholder="заголовок" name="pprtitl">
    <br>
    <br>
    <textarea name="pprcont" id="" cols="30" rows="10"></textarea>
    <br>
    <button type="submit" name="pprsend">ОТПРАВИТЬ</button>
</form>



<?php

if(isset($_POST['pprsend'])) {
    $sv = new \App\Models\Paper();
    $sv -> save();
}