<?php

require_once __DIR__ . '../../connection.php';

class Viewstudentdata
{

    public function viewalldata($tableName)
    {
        $dbConnect = new Connection();
        $conn = $dbConnect->connect();

        $sql = "SELECT * FROM $tableName";
        $result = $conn->query($sql);
        $index = 0;

        while ($row = $result->fetch_assoc()) {
            $index++;
?>

            <tr>
                <td><?php echo $index;  ?></td>
                <td><?php echo $row["name"];  ?></td>
                <td><?php echo $row["age"];  ?></td>
                <td><?php echo $row["subject"];  ?></td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="single.php?id=<?php echo $row['id']; ?>" class="btn btn-success">View</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>

            </tr>
<?php
        }
        return $row;
    }
}


// $view = new Viewstudentdata();

// $view->viewalldata('students');
