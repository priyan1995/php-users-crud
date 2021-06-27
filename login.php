
<?php
require_once __DIR__ . "../header.php";
require_once __DIR__ . "../classes/connection.php";
require_once __DIR__ . "../classes/login.php";



$connection = new Connection();

session_start();

// if (isset($_POST['submit'])) {
// }



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uname']) && isset($_POST['password'])) {

    $username = $_POST['uname'];
    $password = $_POST['password'];


    // if ($namerec != '' && $agerec != '' && $subjectrec != '') {
    //     $submitData->saveStudent($namerec, $agerec, $subjectrec);
    // }
}


?>


<section class="insert-form-sec">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2>Login</h2>
            </div>

            <div class="col-12">

                <form id="studentAddForm" action="" method="post">

                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" name="uname">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>


                   
                    <br>
                    <button type="button" name="submit" id="submitBtn" class="btn btn-primary">Login</button>
                    <a href="register.php" class="btn btn-success">Register</a>

                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // $(function() {
    //     $("#submitBtn").click(function(event) {
    //         event.preventDefault();

    //         var form = $("#studentAddForm");
    //         var url = form.attr('action');

    //         $.ajax({
    //             type: 'POST',
    //             url: url,
    //             encode: true,
    //             data: form.serialize(),
    //             success: function() {
    //                 Swal.fire('Student Saved');
    //                 document.getElementById("studentAddForm").reset();
    //             }
    //         });
    //     });
    // });
</script>



<?php require_once __DIR__ . '../footer.php'; ?>

