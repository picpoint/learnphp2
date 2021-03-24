<?php

require __DIR__ . '/../autoload.php';


$oneNew = App\Models\News::findById($_GET['id']);
print_r($oneNew);