<?php
session_start();
ob_start();
include 'lang.php'; 
require_once('config.php');

if (!empty($_GET['login']) && $_GET['login'] == "error") {
	$result= "<span style = 'color: red;'> Yanlış Email ve ya Şifre</span>";
}
if (!empty($_SESSION['oturum']) && $_SESSION['oturum']== true && !empty($_SESSION['stat'])  &&  $_SESSION['stat']== "admin") {
	header("Refresh: 4s ;admin.php");
	$result= "<span style = 'color: green;'> Tekrar Hoş Geldiniz!</span>";
}
else
 require 'login.php';
?>


