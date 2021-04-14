<?php
error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;
use App\Models\View;

require __DIR__ . '/autoload.php';



// Method MultiException
/*
$res = -43 / 2;



function validate($value) {

    $resErr = new Errors();

    if ($value <= 0) {
        $resErr->addErr(new Exception('Значение должно быть > 0'));
    }

    if ($value % 2 != 0) {
        $resErr->addErr(new Exception('Значение должно быть чётным'));

    }

    foreach ($resErr->getErr() as $err) {
        print_r($err);
        echo "<br>";
        echo "<br>";
    }

    return $value;

}



class Errors extends Exception {

    public $arrErr = [];


    public function addErr($err) {
        $this->arrErr[] = $err;
    }


    public function getErr() {
        return $this->arrErr;
    }

}





try {
    validate($res);
} catch (Exception $e) {
    echo $e->getMessage();
}
*/


















/** @var
 * work with try-catch
 * $nws */

//$nws = new App\Controllers\News();
//$action = $_GET['action'] ?: 'Index';
////$nws -> action($action);


//try {
//    $nws -> action($action);
//} catch (\App\Exeptions\Http404 $e) {
//    var_dump($e->getMessage());
//    echo "<br>";
//    var_dump($e->getCode());
//}


