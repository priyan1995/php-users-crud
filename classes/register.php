<?php 

require_once __DIR__ . '../connection.php';

class Register{

    public function registeruser($uname, $password){
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();

        $data = mysqli_query($conn, "insert into users values('','".$uname."','".$password."')");

        if($data){
            echo "new user added";
        }
    }
}

// $register = new Register();
// $register->registeruser("priyan", "123");


?>