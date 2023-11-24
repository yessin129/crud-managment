<?php

class dbh {
    private $username;
    private $servername;
    private $dbname;
    private $password;

    protected function connect(){
        $this->username="root".$this->password="root".$this->dbname="manegmentsystem".$this->servername="localhost";
        try {
            $dsn ="mysql:host=".$this->servername."dbname=".$this->dbname;
            $pdo = new PDO($dsn,$this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
        echo "did not connect succesfully".$e->getMessage();
        }
    }





};
