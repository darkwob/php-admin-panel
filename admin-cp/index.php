<?php
$root =  "https://sadiksefa.com/project";
define("local", $root );
error_reporting(E_ALL);
ini_set("display_errors", 1);
include 'lang.php';
session_start();
ob_start();

if ($_SESSION['oturum'] == true && $_SESSION['stat'] == "admin") {
    include_once 'assets/lib/head.php';
    include_once 'assets/lib/body.php';
    include_once 'assets/lib/footer.php';
}
else
{
    header("Location:".local."/minorisbaby/index.php");
}




?>