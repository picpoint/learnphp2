<?php

require __DIR__ . '/../autoload.php';

// use App\Models\View;


$oneNew = App\Models\News::findById($_GET['id']);
print_r($oneNew);

$viewNews = new View();
$viewNews -> data['headline'] = $oneNew;
$viewNews -> data['content'] = $oneNew;
$viewNews -> display(__DIR__ . 'showOneNews.php');