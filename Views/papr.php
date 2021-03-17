<?php

require __DIR__ . '/../autoload.php';


// echo($_GET['id']);
// echo("<br>");
// echo("<br>");

$ctn = \App\Models\Paper::findById($_GET['id']);
print_r($ctn);

foreach($ctn as $key => $value) {
    echo("$key - $value");
    echo("<br>");
    echo("<br>");
}

echo("<br>");
echo("<br>");
echo("<br>");



if(isset($_POST['delpost'])) {
    $del = new \App\Models\Paper();
    $del -> delete($_GET['id']);
    header("Location: papers.php");
}



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



?>

<br>
<br>

<form name="delcurpost" method="post">
    <button type="submit" name="delpost">УДАЛИТЬ</button>
</form>

<br>
<br>
<br>
<br>



<form name="editcurpost" method="post">
    <input type="text" name="hdrpost">
    <br>
    <textarea name="cntnpost" id="" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button type="submit">РЕДАКТИРОВАТЬ</button>
</form>

