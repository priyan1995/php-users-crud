<?php
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/connection.php";
require_once __DIR__ . "/submit.php";

$connection = new Connection();
$submitData = new Submit();



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $namerec = $_POST['name'];
    $agerec = $_POST['age'];
    $subjectrec = $_POST['subject'];


    if(isset($namerec) && isset($agerec) && isset($subjectrec) ){
        $submitData-> saveStudent($namerec,$agerec,$subjectrec);
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

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</section>

<script>
    // this is the id of the form
    // $("#studentAddForm").submit(function(e) {

    //     e.preventDefault();

    //     var form = $(this);
    //     var url = form.attr('action');

    //     $.ajax({
    //         type: "POST",
    //         url: url,
    //         data: form.serialize(), 
    //         success: function(data) {
    //             alert(data); 
    //         }
    //     });


    // });

    $(function() {
        $("#studentAddForm").submit(function(event) {
            event.preventDefault();

            // var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: 'POST',
                url: url,
                data: $(this).serialize(),
                success: function(result) {
                    $("#response").text(result);

                }

            });
        });
    });
</script>



<?php require_once __DIR__ . '/footer.php'; ?>