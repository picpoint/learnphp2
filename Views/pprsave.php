<?php

require __DIR__ . '/../autoload.php';


$sv = new \App\Models\Paper();
$sv -> save();

// echo($_POST['pprtitl']);
// echo("<br>");
// echo($_POST['pprcont']);

header("location: papers.php");