<?php

require_once __DIR__ . '../../connection.php';


class DeleteStudent{

    public function deletestudentdata($deleteId){
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();
        $sql = "DELETE FROM students WHERE id=$deleteId";
        $result = $conn->query($sql);

        // if($result){
        //     echo 'deleted';
        // }else{
        //     echo 'failed';
        // }
       
    }

   

}


// $deletestud = new DeleteStudent();

// $deletestud->deletestudentdata(46);













?>