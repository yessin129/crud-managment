<?php

class Crud {

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];

            try {
                require_once "db.conn.php";
               $query = "INSERT INTO users";
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
        } else {
           header("location: ./form create users.php");
        }
    }
}

?>












