<?php
//error_reporting(E_ALL);
use App\Models\Product;
use App\Models\Service;
use App\Models\HasPrice;
use App\Models\View;
use App\Exeptions\Errors;

use App\Controllers\Foo;
use SebastianBergmann\Timer\Timer;


require __DIR__ . '/autoload.php';
















/** @var
 * Lesson 6 task 3.2
 * made
 * $timer */
/*
$timer = new Timer;
$timer->start();
foreach (\range(0, 100000) as $i) {
    echo $i;
}

$duration = $timer->stop();

var_dump(get_class($duration));
echo "<br>";
var_dump('Time -> ' . $duration->asString());
echo "<br>";
var_dump('Seconds -> ' . $duration->asSeconds());
echo "<br>";
var_dump('Milliseconds -> ' . $duration->asMilliseconds());
echo "<br>";
var_dump('Microseconds -> ' . $duration->asMicroseconds());
echo "<br>";
var_dump('Nanoseconds -> ' . $duration->asNanoseconds());
*/






/** @var
 * Lesson 6 task 3.1 - Logging
 * not work
 * $log */
//$log = new Foo();
//$log->doSomething();



































/** @var
 * MultiException
 * $res */

//$res = -43 / 2;
//
//
//function validate($value) {
//
//    $resErr = new Errors();
//
//    if ($value <= 0) {
//        $resErr->addErr(new Exception('Значение должно быть > 0'));
//    }
//
//    if ($value % 2 != 0) {
//        $resErr->addErr(new Exception('Значение должно быть чётным'));
//
//    }
//
//    foreach ($resErr->getErr() as $err) {
//        print_r($err);
//        echo "<br>";
//        echo "<br>";
//    }
//
//    return $value;
//
//}
//
//
//try {
//    validate($res);
//} catch (Exception $e) {
//    echo $e->getMessage();
//}









/** @var
 * work with try-catch
 * $nws */

$nws = new App\Controllers\News();
$action = $_GET['action'] ?: 'Index';
//$nws -> action($action);


try {
    $nws -> action($action);
} catch (\App\Exeptions\Http404 $e) {
    var_dump($e->getMessage());
    echo "<br>";
    var_dump($e->getCode());


    /**
     * Send mail
     * * Lesson 6 task 4 - Logging
     * not work
     */
    /*
// Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.example.org', 25))->setUsername('bugaga')->setPassword('123456');

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom(['john@doe.com' => 'John Doe'])
        ->setTo(['rubin@magazin-rubin.ru', 'info@magazin-rubin.ru' => 'A name'])
        ->setBody('Here is the message itself');

// Send the message
    $result = $mailer->send($message);
    */


}


