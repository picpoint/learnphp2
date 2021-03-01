<?php

namespace Views;
use App\Model;

echo($_GET['id']);

echo("<br>");
echo("<br>");
echo("<br>");

$resArticle = \App\Models\Article::findById($_GET['id']);
print_r($resArticle);