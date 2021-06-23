<?php

include_once __DIR__.'../../connection.php';

class EditStudent{

    public function editStudentSave($id, $name, $age, $subject){
       $dbConnect = new Connection();       
       $conn = $dbConnect->connect();
       $query = "UPDATE students SET name='$name', age='$age', subject='$subject' WHERE id=$id";
       $execute = $conn->query($query);

    //    if($execute){
    //        echo "success";
    //    }else{
    //        echo "failed";
    //    }
    }
}

// $editStud = new EditStudent();

// $editStud-> editStudentSave(67, 'priyan', '26', 'maths');




?>