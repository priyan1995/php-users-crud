<?php

require_once __DIR__ . "../../header.php";
require_once __DIR__ . "../../classes/connection.php";
require_once __DIR__ . "../../classes/students/view.php";
require_once __DIR__ . "../../classes/students/delete.php";





$deleteStud = new DeleteStudent();
$students = new Viewstudentdata();

if(isset($_POST['deleteID'])){
    $deleteStudentId = $_POST['deleteID'];
    $deleteStud-> deletestudentdata($deleteStudentId);
}



?>


<section class="student-table-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>All Students</h2>
            </div>

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $students->viewalldata('students'); ?>
                    </tbody>
                </table>
                <br>
                <a href="insert.php" class="btn btn-success">Add new</a>
            </div>
        </div>
    </div>
</section>


<script>

$(function(){
    $(".delete-stud").click(function(event){
        event.preventDefault();

        var delId = $(this).attr('id');

        $.ajax({
            type:'POST',
            url: '',
            encode: true,
            data: {
                deleteID : delId
            },
            success: function(data){
               window.location.href= 'view.php';
               
            }
        });


    });
});


</script>

<?php require_once __DIR__ . '../../footer.php'; ?>