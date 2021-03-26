<?php

require __DIR__ . '/../autoload.php';

use App\Models\View;

/**
 * вызов модели "новости" и вывод одной конкретной новости
 */
$oneNew = App\Models\News::findById($_GET['id']);

/**
 * Вызов шаблона "вид" и передача конкретной новости
 */
$viewNews = new View();
$viewNews -> data = $oneNew;
$viewNews -> display(__DIR__ . '/showOneNews.php');


/**
 * вывод интерфейса Countable
 */
// echo(count($viewNews));