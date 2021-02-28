<?php
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';


// $data = App\Models\Article::getAll();
// print_r($data);

// echo("<br>");
// echo("<br>");
// echo("<br>");

// $rs = App\Models\User::getAll();
// print_r($rs);


$getOneRecord = Tests\GetOneRecord::findById(0);
print_r($getOneRecord);











// $res = Tests\TestPerfomance::getAll();                                   // тест с подстановкой для проверки работы
// print_r($res);