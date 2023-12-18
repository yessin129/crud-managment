<?php

class create extends connect {
    public function __construct() {
        parent::__construct(); // Assuming connect is the parent class with a constructor

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["pwd"];
            $email = $_POST["email"];

            try {
                require_once "db.conn.php"; // Assuming this file contains database connection logic
                $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
                $stmt = $this->pdo->prepare($query);
                $stmt->execute([$username, $password, $email]);
                // You may want to add additional logic here, such as error handling or redirecting after successful insertion
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
        } else {
            header("location: form_create.html"); // Corrected the filename to form_create.html
        }
    }
}

// Assuming connect class is defined somewhere
class connect {
    protected $pdo;

    public function __construct() {
        // Connect to the database and initialize $pdo
        // You need to implement database connection logic here
    }
}

// Create an instance of the create class to trigger the logic
$createInstance = new create();
