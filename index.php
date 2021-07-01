<?php 
require_once __DIR__ . "../header.php"; 
require_once __DIR__ . "../classes/session.php";

$sessionCheck = new SessionCheck();
$sessionCheck-> sessionIsst();
?>

<h2>Index</h2>

<?php require_once __DIR__ . '../footer.php'; ?>