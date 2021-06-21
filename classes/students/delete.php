<?php

require_once __DIR__ . '../../connection.php';


class DeleteStudent{

    public function deletestudentdata($deleteId){
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();
        $sql = "DELETE FROM students WHERE id=$deleteId";
        $result = $conn->query($sql);      

        // if($result){
        //     return  'deleted';
        // }else{
        //     return 'failed';
        // }
       
    } 

}














?>