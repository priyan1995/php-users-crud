<?php
require_once __DIR__ . "../../header.php";
require_once __DIR__ . "../../classes/students/edit.php";
require_once __DIR__ . "../../classes/students/single.php";

require_once __DIR__ . "../../classes/session.php";
$sessionCheck = new SessionCheck();
$sessionCheck-> sessionIsst();

$id = $_GET['id'];

$studentData = new ViewStudentSingle();

$studentName = $studentData->getstudentname($id,'students');
$studentAge = $studentData->getstudentAge($id,'students');
$studentSubject = $studentData->getstudentSubject($id,'students');




if ($_SERVER["REQUEST_METHOD"] == "POST" &&  isset($_POST['name']) && isset($_POST['age']) && isset($_POST['subject'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $subject = $_POST['subject'];

    if ($name != '' && $age != '' &&  $subject != '') {
        $editStud = new EditStudent();
        $editStud->editStudentSave($id, $name, $age, $subject);
    }
}
?>


<section class="insert-form-sec">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2>Edit Student</h2>
            </div>

            <div class="col-12">
                <form id="studentEditForm" action="" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $studentName; ?>">
                    </div>

                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" value="<?php echo $studentAge; ?>">
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" value="<?php echo $studentSubject; ?>">
                    </div>

                    <br>
                    <button type="button" name="submit" id="submitBtn" class="btn btn-primary">Save</button>
                    <a href="./view.php" class="btn btn-success">All Students</a>

                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
        $("#submitBtn").click(function(e) {
            e.preventDefault();

            var form = $("#studentEditForm");
            var url = form.attr('action');

            $.ajax({
                type: 'POST',
                url: url,
                encode: true,
                data: form.serialize(),
                success: function(data) {
                    Swal.fire('Student Saved');   
                    window.location.href = 'view.php';                
                }
            });

        });
    });
</script>

<?php require_once __DIR__ . '../../footer.php'; ?>