<?php
require_once __DIR__ . "../header.php";

require_once __DIR__ . "../classes/session.php";

$sessionCheck = new SessionCheck();
$sessionCheck->sessionIsst();

?>


<?php require_once __DIR__ . '../footer.php'; ?>