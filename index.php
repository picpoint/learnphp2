<?php
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';


// $data = App\Models\Article::getAll();                                   // получение новостей
// print_r($data);


// $rs = App\Models\User::getAll();                                        // получение записей о пользователях
// print_r($rs);


// $getOneRecord = Tests\GetOneRecord::findById(2);                        // получение одной записи
// print_r($getOneRecord);


// $res = Tests\TestPerfomance::getAll();                                  // тест с подстановкой для проверки работы
// print_r($res);



$news = App\Models\News::getNLatestNews(4);
print_r($news);