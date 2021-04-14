<?php


namespace App\Exeptions;


class Errors extends \Exception {

    public $arrErr = [];


    public function addErr($err) {
        $this->arrErr[] = $err;
    }


    public function getErr() {
        return $this->arrErr;
    }

}