<?php

require __DIR__ . '/../autoload.php';

use App\Models\View;


$oneNew = App\Models\News::findById($_GET['id']);

$viewNews = new View();
$viewNews -> data = $oneNew;
$viewNews -> display(__DIR__ . '/showOneNews.php');