<?php

require_once __DIR__ . '../connection.php';

class SessionCheck
{
    public function sessionIsst()
    {

        $dbConnect = new Connection();
        $conn = $dbConnect->connect();

        $user_check = $_SESSION['login_user'];

        $ses_sql = mysqli_query($conn, "select username from users where username = '$user_check' ");

        $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
        $login_session = $row['username'];

        if (!isset($_SESSION['login_user']) ) {
            header("location: /php-users-crud/login.php");
        }
    }
}
