







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
    }

}




$tiago = new Test();

$tiago->getUsers();