<?php

class dbh {
    private $username;
    private $servername;
    private $dbname;
    private $password;

    protected function connect(){
        $this->username="root".$this->password="root".$this->dbname="manegmentsystem".$this->servername="localhost";
        $dsn ="mysql:host=".$this->servername."dbname=".$this->dbname;
        $pdo = new PDO($dsn,$this->username, $this->password);
        return $pdo;
    }
};
