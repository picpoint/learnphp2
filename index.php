<?php
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';


$data = App\Models\Article::getAll();
print_r($data);


echo("<br>");
echo("<br>");
echo("<br>");

$rs = App\Models\User::getAll();
print_r($rs);





// $res = Tests\TestPerfomance::getAll();                                   // тест с подстановкой для проверки работы
// print_r($res);