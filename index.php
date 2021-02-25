<?php


require __DIR__ . '/autoload.php';

$res = new \App\Db();
$datas = $res -> getAll('SELECT * FROM users');
var_dump($datas);