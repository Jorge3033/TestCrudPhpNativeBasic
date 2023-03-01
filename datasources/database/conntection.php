<?php

namespace testPhp\datasources\database;

class BDConnection {

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'crud';

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$connection) {
            die('Error connecting to database');
        }
        return $connection;
    }

}