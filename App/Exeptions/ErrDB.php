<?php

namespace App\Exeptions;


class ErrDB extends \Exception
{

    public function errConnect(\Exception $e) {
        var_dump('ERR DB -> ' . $e->getMessage());
    }


}