<?php 

require_once __DIR__ . "../../classes/session.php";
$sessionCheck = new SessionCheck();
$sessionCheck-> sessionIsst();

header("location: view.php");
?>


