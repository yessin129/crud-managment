<?php

class dbh {
    private $username;
    private $servername;
    private $dbname;
    private $password;

    public function connect(){
        $this->username = "root";
        $this->password = "root";
        $this->dbname = "manegmentsystem";
        $this->servername = "localhost:3306";

        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "connectie gelukt";

        } catch (PDOException $e) {
            echo "Did not connect successfully: " . $e->getMessage();
        }
    }





};
