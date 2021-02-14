<?php

require __DIR__ . '/autoload.php';

$db = new App\Db();
$res = $db -> queryToDB("SELECT * FROM users");
print_r($res);