<?php

require_once __DIR__ . "../../header.php";
require_once __DIR__ . "../../classes/connection.php";
require_once __DIR__ . "../../classes/students/single.php";
require_once __DIR__ . "../../classes/students/delete.php";


$id = $_GET['id'];
$table = 'students';


$student = new ViewStudentSingle();
$deleteStud = new DeleteStudent();

$student_name = $student->getstudentname($id, $table);
$student_age = $student->getstudentAge($id, $table);
$student_subject = $student->getstudentSubject($id, $table);

if (isset($_POST['delete_id'])) {
    $delId = $_POST['delete_id'];
    $deleted = $deleteStud->deletestudentdata($delId);  
}
?>


<section class="student-table-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><?php echo $student_name;  ?></h2>
                <h4>Age: <?php echo $student_age; ?></h4>
                <h4>Subject: <?php echo $student_subject; ?></h4>

            </div>


            <div class="col-12 text-center">
                <a href="view.php" class="btn btn-primary">All Students</a>
                <a href="edit.php" class="btn btn-success">Edit Students</a>
                <a href="" class="btn btn-danger delete-student" id="<?php echo $id; ?>" >Delete Students</a>


            </div>

        </div>
    </div>
</section>



<script>

    $(function() {
        $(".delete-student").click(function(event) {
            event.preventDefault();

            var delID = $(this).attr('id');            

            $.ajax({
                type: 'POST',
                url: '',
                encode: true,
                data: {
                    delete_id: delID
                },
                success: function(data) {
                    window.location.href = 'view.php';
                }
            });
        });
    });
</script>

<?php require_once __DIR__ . '../../footer.php'; ?>