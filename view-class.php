<?php

require_once __DIR__ . '/connection.php';

class Viewstudentdata
{

    public function viewalldata($tableName)
    {
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();

        $sql = "SELECT * FROM $tableName";
        $result = $conn->query($sql);


        $row = $result->fetch_assoc();

?>
        <td><?php echo $row["name"];  ?></td>
        <td><?php echo $row["age"];  ?></td>
        <td><?php echo $row["subject"];  ?></td>
<?php
        return $row;
    }
}


// $view = new Viewstudentdata();

// $view->viewalldata('students');
