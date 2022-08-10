<?php
session_start();
ob_start();
ob_clean();
session_destroy();
$_SESSION['oturum']= false;
header("location:index.php");

?>