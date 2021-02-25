<?php
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';


$data = App\Models\Article::getAll();
print_r($data);




// foreach($data as $dt) {
//     foreach($dt as $key => $value) {
//         if(is_numeric($key)) {
//             continue;
//         }
//         echo("$key - $value");
//         echo("<br>");
//     }
//     echo("<br>");
// }