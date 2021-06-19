<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/connection.php";
require_once __DIR__ . "/submit.php";

$connection = new Connection();
$submitData = new Submit();


if (isset($_POST['submit'])) {
    //do something

    //..do all post stuff
    // header('Location: insert.php'); //clears POST
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['subject'])) {

    $namerec = $_POST['name'];
    $agerec = $_POST['age'];
    $subjectrec = $_POST['subject'];


    if ($namerec && $agerec && $subjectrec) {
        $submitData->saveStudent($namerec, $agerec, $subjectrec);
    }
}


?>


<section class="insert-form-sec">
    <div class="container">
        <form id="studentAddForm" action="" method="post">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age">
            </div>

            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="subject">
            </div>

            <button type="button" name="submit" id="submitBtn" class="btn btn-primary">Submit</button>

        </form>
    </div>
</section>

<script>
    $(function() {
        $("#submitBtn").click(function(event) {
            event.preventDefault();

            var form = $("#studentAddForm");
            var url = form.attr('action');

            $.ajax({
                type: 'POST',
                url: url,
                encode: true,
                data: form.serialize(),
                success: function() {                   
                    document.getElementById("studentAddForm").reset();
                }
            });
        });
    });
</script>



<?php require_once __DIR__ . '/footer.php'; ?>