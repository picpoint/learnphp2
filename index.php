<?php

require __DIR__ . '/autoload.php';


$art = \App\Models\Article::findAll();
var_dump($art);

echo("<br>");
echo("<br>");

$usr = \App\Models\User::findAll();
print_r($usr);