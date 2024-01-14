<?php

class Dbh {
    private $username;
    private $servername;
    private $dbname;
    private $password;
/// verbind met de database
    public function connect (){
        $this->username = "root";
        $this->password = "root";
        $this->dbname = "manegementsystem";
        $this->servername = "localhost";

        try {
            $dsn = "mysql:host=localhost;dbname=manegementsystem";
//            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
            $pdo = new PDO($dsn, $this->username, $this->password);
            //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


return $pdo;

        } catch (PDOException $e) {
            echo "Did not connect successfully: " . $e->getMessage();
        }
    }

}

