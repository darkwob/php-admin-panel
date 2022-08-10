<?php
require_once('config.php');
session_start();
ob_start();
if (isset($_POST['giris']) && (!empty($_POST['email']) && !empty($_POST['pass']))) 
{
   $_SESSION['oturum']= true;
   $_SESSION['email'] = $_POST['email'];
   
   $sorgu = $db ->prepare("SELECT * FROM users WHERE email= ? AND pass = ?");
    $sorgu ->execute([
    $_SESSION['email'],
    md5($_POST['pass'])
  ]);
  $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);
    if ($sorgu->rowCount()) {
        if ($cikti) {
           $_SESSION['stat'] = $cikti['stat'];
           $_SESSION['name'] = $cikti['name'];
           $_SESSION['username'] = $cikti['username'];
           $_SESSION['id'] = $cikti['id'];
           header("Location: admin.php");
        }
    }
    else{
        header("location: index.php?login=error");
    }

}
else{
    echo "Kullanıcı Adı ve ya Şifreyi Boş Bırakmayınız!";
}

if (isset($_POST['kayit'])) 
{
    $user = rand();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['name'] = $_POST['name'];
    $reg = $db->prepare("INSERT INTO users(name,email,username,pass) value (?,?,?,?)");

    $cikti = $reg ->Execute([
        $_SESSION['name'],
        $_SESSION['email'],
        $user,
        md5($_POST['password'])
    ]);
    if ($cikti) {
        header("Location: index.php");
    }
    else
    {
        header("location: index.php?log=error");
    }
}
?>