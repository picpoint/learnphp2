<?php

namespace App;



class Conf {

    public static function confInst() {
        return (require __DIR__ . '/../config.php')['db'];
    }


}