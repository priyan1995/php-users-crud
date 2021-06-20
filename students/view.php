<?php

require_once __DIR__ . "../../header.php";
require_once __DIR__ . "../../classes/connection.php";
require_once __DIR__ . "../../classes/students/view.php";

$students = new Viewstudentdata();

?>


<section class="student-table-sec">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Subject</th>
                </tr>
            </thead>
            <tbody>
                <?php $students->viewalldata('students'); ?>

            </tbody>
        </table>
    </div>
</section>