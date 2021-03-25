<?php

require __DIR__ . '/../autoload.php';

use App\Models\View;


$oneNew = App\Models\News::findById($_GET['id']);
// print_r($oneNew);

echo("<br>");
echo("<br>");
echo("<br>");

$viewNews = new View();
$viewNews -> data = $oneNew;
// $viewNews -> data['content'] = $oneNew;

// print_r($viewNews);

$viewNews -> display(__DIR__ . '/showOneNews.php');