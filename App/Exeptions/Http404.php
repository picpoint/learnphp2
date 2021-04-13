<?php

namespace App\Exeptions;


use Throwable;

class Http404 extends \Exception {

    public function __construct($message = "ERR from class Http404", $code = 419, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}