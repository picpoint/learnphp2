<?php

require __DIR__ . '/autoload.php';


$data = \App\Models\Article::findAll();
var_dump($data);

echo("<br>");
echo("<br>");
echo("<br>");

$dataUsr = \App\Models\User::findAll();
var_dump($dataUsr);