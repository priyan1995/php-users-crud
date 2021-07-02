<?php
require_once __DIR__ . "../header.php";
require_once __DIR__ . "../classes/connection.php";
require_once __DIR__ . "../classes/login.php";
require_once __DIR__ . "../classes/session.php";


$connection = new Connection();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uname']) && isset($_POST['password'])) {

    $username = $_POST['uname'];
    $password = $_POST['password'];

    $login = new Login();
    $login->loginAccess($username, $password);

    if (isset($_SESSION['login_user'])) {
        header("location: index.php");
    }
}

?>


<section class="insert-form-sec">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2>Login</h2>
            </div>

            <div class="col-12">
                <form id="loginForm" action="" method="post">

                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" name="uname">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div>
                    <p class="text-danger mb-0">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uname']) && isset($_POST['password'])) {
                            if (!isset($_SESSION['login_user'])) {
                                echo "Invalid Login..!";
                            }
                        }
                        ?>
                    </p>
                    </div>

                    <br>
                    <button type="submit" name="submit" id="submitBtn" class="btn btn-primary">Login</button>
                    <a href="register.php" class="btn btn-success">Register</a>

                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(function() {
        $("#submitBtn").click(function(event) {
            //  event.preventDefault();

            var form = $("#loginForm");
            var url = form.attr('action');

            $.ajax({
                type: 'POST',
                url: url,
                encode: true,
                data: form.serialize(),
                success: function(data) {
                    // Swal.fire('Student Saved');
                    //document.getElementById("studentAddForm").reset();
                    //window.location.href = 'index.php';                  
                }
            });
        });
    });
</script>



<?php require_once __DIR__ . '../footer.php'; ?>