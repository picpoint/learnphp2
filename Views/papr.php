<?php

require __DIR__ . '/../autoload.php';


// echo($_GET['id']);
// echo("<br>");
// echo("<br>");

$ctn = \App\Models\Paper::findById($_GET['id']);

$hd = '';
$ct = '';

foreach($ctn as $c) {
    foreach($c as $key => $value) {
        if($key == 'heading') {
            $hd = $value;
        }
    
        if($key == 'content') {
            $ct = $value;
        }
    }

}





if(isset($_POST['delpost'])) {
    $del = new \App\Models\Paper();
    $del -> delete($_GET['id']);
    header("Location: papers.php");
}


if(isset($_POST['btnedit'])) {
    if(!empty($hd) && !empty($ct)) {
        $upd = new App\Models\Paper();
        $upd -> heading = $_POST['hdredit'];
        $upd -> content = $_POST['cntedit'];
        $upd -> update($_GET['id']);
        header("Location: papers.php");
    }
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
    <input type="text" name="hdredit" value="<?php echo($hd);?>">
    <br>
    <textarea name="cntedit" id="" cols="30" rows="10">
        <?php echo($ct);?>
    </textarea>
    <br>
    <br>
    <button type="submit" name="btnedit">РЕДАКТИРОВАТЬ</button>
</form>

