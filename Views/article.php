<?php

require __DIR__ . '/../autoload.php';

// namespace Views;
use App\Model;
use App\Models;

echo($_GET['id']);

echo("<br>");
echo("<br>");
echo("<br>");

$resArticle = \App\Models\Article::findById($_GET['id']);
print_r($resArticle);