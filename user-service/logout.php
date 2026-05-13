<?php
session_start();

session_unset();

session_destroy();

header("Location: /hausmarket/frontend/index.php");
exit();
?>