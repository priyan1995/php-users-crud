<?php

require_once __DIR__ . '../connection.php';

class Register
{

    public function registeruser($uname, $password, $email)
    {
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();

        if ($uname !== "" && $password !== "" && $email !== "") {

            $available = "SELECT * FROM users WHERE username = '$uname' OR email = '$email'"; 
            $resultavailab=mysqli_query($conn,$available);
            $resultavailabCount =  mysqli_num_rows($resultavailab);
            if($resultavailabCount){
                //header("location: /php-users-crud/register.php");
                echo '<p class="text-danger text-center">Username or email already exist</p>';
            }else{
                $data = mysqli_query($conn, "insert into users values('','" . $uname . "','" . $email . "','" . $password . "')");
                if($data){
                    header("location: /php-users-crud/login.php");
                }
            }
        }
    }
}

