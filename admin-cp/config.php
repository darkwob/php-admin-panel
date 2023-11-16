<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
try {
    $db = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8","username","pass");
    $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExpection $hata) {
    echo $hata -> getMessage();
}
?>
