<?php







include "db.conn.php";
class Test  {

    public function getUsers (){
        $sql = "SELECT * FROM users";

        $dbhdbh = new Dbh();
        $conn = $dbhdbh->connect();
        $stmt = $conn->query($sql);
        while ($row = $stmt->fetchAll()){
            echo $row;  '<br>';
        }
    }
    public function getUsersstmt ($username,$password){

        $sql = "SELECT * FROM users WHERE username = ?  AND password =? ";
        $dbhdbh = new Dbh();
        $conn = $dbhdbh->connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username,$password]);
        $names = $stmt->fetchAll();
        foreach ($names as $name){
            echo $name["username"];
        }
        }
    }









$tiago = new Test();
$tiago->getUsersstmt("yessin","yo                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ");

