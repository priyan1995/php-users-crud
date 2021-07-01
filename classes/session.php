<?php 

require_once __DIR__.'../connection.php';

class SessionCheck{
    public function sessionIsst(){
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();
        session_start();

        $user_check  = $_SESSION['login_user'];
        $ses_sql = mysqli_query($conn,"select username from admin where username = '$user_check' ");
        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
        $login_session = $row['username'];

        if(!isset($_SESSION['login_user'])){
           // $url =  $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            header("location: /php-users-crud/login.php");
            die();
        }



    }
}



?>