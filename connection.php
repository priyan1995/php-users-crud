<?php

class Connection {
    var $host = "localhost";
    var $user = "root";
    var $password = "";
    var $db = "crud-app";    

    public function connect(){
        $con = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        return $con;
    }

}








?>