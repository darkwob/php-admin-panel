<?php

session_start();
ob_start();

if ( $_SESSION['stat'] == "admin" && $_SESSION['oturum'] == true) {
    $_SESSION['oturum']= true;

    header("location: admin-cp");
}
else{
    header("Location: index.php");
}
?>