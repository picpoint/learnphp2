<?php

namespace App;


class Db {

    protected $dbh;

    public function __construct() {
        $config = (require __DIR__ . '/../config.php')['db'];
        $this->dbh = new \PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['password']);
    }


    public function query($sql, $class) {
        $sth = $this->dbh -> prepare($sql);
        $sth -> execute();
        return $sth -> fetchAll(\PDO::FETCH_CLASS, $class);
    }


    public function execute($sql) {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();

    }


}