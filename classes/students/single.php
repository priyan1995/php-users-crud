<?php

require_once __DIR__ . '../../connection.php';


class ViewStudentSingle{    
    
    public function getstudentname($studentId,$tableName){
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();
        $sql = "SELECT * FROM $tableName WHERE id=$studentId";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row["name"];
    }

    public function getstudentSubject($studentId,$tableName){
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();
        $sql = "SELECT * FROM $tableName WHERE id=$studentId";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row["subject"];
    }

    public function getstudentAge($studentId,$tableName){
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();
        $sql = "SELECT * FROM $tableName WHERE id=$studentId";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row["age"];
    }
}


















?>