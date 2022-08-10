<?php
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$_SERVER["REQUEST_URI"];
$lang =substr($actual_link, -2);   
if ($lang == "tr") {
   $title = "Minoris";
   $min = "MİNORİS BABY HOŞ GELDİNİZ";
   $sg = "Hesap Oluşturun";
   $mgx = "Kayt Olmak için Mail Adresinizi Kullanın";
   $signup = "Giriş Yap";
   $h1sgn = "Giriş Yap";
   $welh1 = "Tekrar Hoşgeldiniz";
   $inp = "Bizimle bağlantıda kalmak için lütfen kişisel bilgilerinizle giriş yapın";
   $helh1 = "Merhaba Dostum";
   $bgh1  = "Kişisel bilgilerinizi girin ve bizimle yolculuğa başlayın";
   $signin = "Kayıt Ol";
   $social = "ile Giriş Yapın";
   $forget = "Şifreni mi Unuttun ? ";
}
else if($lang == "en")
{
   $title = "Minoris";
   $min = "WELCOME TO MİNORİS";
   $sg = "Create Account ";
   $mgx = "or use your email for registration";
   $signup = "Sign Up";
   $h1sgn = "Sign Up";
   $welh1 = "Welcome Back";
   $inp = "To keep connected with us please login with your personal info";
   $helh1 = "Hello Friend";
   $bgh1  = "Enter your personal details and start journey with us";
   $signin = "Sign In";
   $social = "or use your account";
   $forget = "Forgot your password?";
   

}

else
{
   $title = "Minoris";
   $min = "MİNORİS BABY HOŞ GELDİNİZ";
   $sg = "Hesap Oluşturun";
   $mgx = "Kayt Olmak için Mail Adresinizi Kullanın";
   $signup = "Kayıt Ol";
   $h1sgn = "Giriş Yap";
   $welh1 = "Tekrar Hoşgeldiniz";
   $inp = "Bizimle bağlantıda kalmak için lütfen kişisel bilgilerinizle giriş yapın";
   $helh1 = "Merhaba Dostum";
   $bgh1  = "Kişisel bilgilerinizi girin ve bizimle yolculuğa başlayın";
   $signin = "Kayıt Ol";
   $social = "ile Giriş Yapın";
   $forget = "Şifreni mi Unuttun ? ";
}




?>