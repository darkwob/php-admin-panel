<?php 
try {
    $db = new PDO("mysql:host=localhost;dbname=olindeon1_mydatebase;charset=utf8","olindeon1_sado","Senyor2013");
    $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExpection $hata) {
    echo $hata -> getMessage();
}
?>