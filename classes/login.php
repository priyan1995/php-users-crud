<?php
require_once __DIR__ . '../connection.php';

class Login
{
    public function loginAccess($uname, $password)
    {
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();

        $sql = "SELECT * FROM users WHERE username = '$uname' AND password= '$password' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($row) {
            $session_name = $row["username"];
        }

        $count = mysqli_num_rows($result);

        if ($count == 1) {

            $_SESSION['login_user'] = $session_name;            
            header("location: index.php");
            return $_SESSION['login_user'];
        } else {
            return "Username or Password Invalid..!";
        }
    }
}
