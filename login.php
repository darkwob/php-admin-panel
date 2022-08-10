
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="./img/icon-profil.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?= $title  ?></title>
</head>
<body>
    <h2><?= $min ?></h2>
    <div class="container" id="container">
	<div class="form-container sign-up-container">
		<!-- Birinci Form Kayıt Formu Başlanıç-->
        <form action="islem.php" method="post">
			<h1><?=$sg?></h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-instagram"></i></a>
			</div>
			<span><?=$mgx?></span>
			<input name="name" type="text" placeholder="Name" />
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<button name="kayit"><?= $signin ?></button>
		</form>
	</div>
	<!-- Birinci Form Kayıt Formu Bittiş-->
	<!-- İkinci Form Kayıt Formu Bittiş-->
	<div class="form-container sign-in-container">
		<form action="islem.php" method="post">
			<h1><?= $signin?></h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-instagram"></i></a>
			</div>
			<span><?=$social?></span>
			<div><?=$result?></div>
			<input name="email" type="email" placeholder="Email" />
			<input name="pass" type="password" placeholder="Password" />
			<a href="#"><?=$forget ?></a>
			<button name="giris"><?=$h1sgn?></button>
		</form>
	</div>
	<!-- İkinci Form Kayıt Formu Bittiş-->
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1><?=$welh1?></h1>
				<p><?=$inp?></p>
				<button class="ghost" id="signIn"><?= $signin?></button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1><?= $helh1 ?></h1>
				<p><?=$bgh1?></p>
				<button  class="ghost" id="signUp"><?= $signup ?></button>
			</div>
		</div>
	</div>
</div>
    <script src="assets/js/script.js"></script>
</body>
</html>