<?php

require __DIR__ . '/autoload.php';

$rs = new App\Db();
$res = $rs -> query("SELECT * FROM users");
var_dump($res);