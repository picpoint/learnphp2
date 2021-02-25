<?php

namespace App;


class Db {

    protected $dbh;

    public function __construct() {
        $config = (require __DIR__ . '/../config.php')['db'];
        $this->dbh = new \PDO('mysql:host=localhost;dbname=profit2', 'rmtar', '2203');
    }


    public function getAll($sql) {
        $sth = $this->dbh -> prepare($sql);
        $sth -> execute();
        return $sth -> fetchAll();
    }


}