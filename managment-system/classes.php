<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "db.conn.php";







class Test
{
    private $conn = null;

    public function __construct() {
        $database = new Dbh();
        $this->conn = $database->connect();
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM users";

        $stmt = $this->conn->query($sql);
        while ($row = $stmt->fetchAll()) {
            echo $row;
            '<br>';
        }
    }

    public function getUsersstmt($username, $password)
    {

        $sql = "SELECT * FROM users WHERE username = ?  AND password =? ";
        $dbhdbh = new Dbh();
        $conn = $dbhdbh->connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username, $password]);
        $names = $stmt->fetchAll();
        foreach ($names as $name) {
            echo $name["username"];
        }
    }

    public function setUserstmt($username, $password, $email)
    {
        $sql = "INSERT INTO users(username,password,email) VALUES (?,?,?)";
        $dbhdbh = new Dbh();
        $conn = $dbhdbh->connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username, $password, $email]);

    }


    public function updateUserstmt($userid, $username, $email)
    {
        echo "<h1>$userid | $username | $email </h1>>";

        $sql = "UPDATE users SET username = ?, email = ? WHERE userid = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$username,$email, $userid]);
    }


    public function deleteUserstmt ($userid){
        $sql =" DELETE FROM users WHERE userid =? ";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$userid]);
    }

}

$tiago = new Test();
$tiago->deleteUserstmt("5");
