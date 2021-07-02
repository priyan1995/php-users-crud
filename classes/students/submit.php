<?php 
 
 require_once __DIR__.'../../connection.php';


 class Submit{

    public function saveStudent($name,$age,$subject){
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();
        $data = mysqli_query($conn, "insert into students values('','".$name."','".$age."','".$subject."')");
        return $data;
        // if($data){
        //     echo "data added";
        // }
    } 
 }

?>