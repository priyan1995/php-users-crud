<?php
require_once __DIR__ . "../header.php";
require_once __DIR__ . "../classes/register.php";
require_once __DIR__ . "../classes/connection.php";

$connection = new Connection();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['password_re']) && isset($_POST['email'])) {

    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_re = $_POST['password_re'];


    if ($password == $password_re) {
        $register = new Register();
        $register->registeruser($username, $password, $email);
    }
}
?>





<section class="insert-form-sec">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2>Register</h2>
            </div>

            <div class="col-12">
                <form id="registerForm" action="" method="post" autocomplete="off">

                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" name="uname">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label>Retype Password</label>
                        <input type="password" class="form-control" name="password_re">
                    </div>



                    <br>
                    <button  name="submit" id="submitBtn" class="btn btn-primary">Register</button>
                    <a href="login.php" class="btn btn-success">Login</a>


                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $("#registerForm").validate({
        rules: {
            uname: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
            password_re: {
                required: true,
                equalTo: '[name="password"]'
            },
            submitHandler: function() {
                $(function() {
                    $("#submitBtn").click(function(event) {
                        event.preventDefault();

                        var form = $("#registerForm");
                        var url = form.attr('action');

                        $.ajax({
                            type: 'POST',
                            url: url,
                            encode: true,
                            data: form.serialize(),
                            success: function() {
                                 Swal.fire('User Saved');
                                //document.getElementById("studentAddForm").reset();
                                window.location.href = 'login.php';
                            }
                        });
                    });
                });


            }
        }
    });
</script>


<?php require_once __DIR__ . '../footer.php'; ?>