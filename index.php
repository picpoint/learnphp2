<?php


require __DIR__ . '/autoload.php';

$usrs = new \App\Model\User();
$usrs -> getAllUsers();

echo("<br>");
var_dump($usrs);