<?php
include 'lang.php';
require 'config.php';
session_start();
ob_start();
include_once 'assets/lib/head.php';
include_once 'profile/navbar.php';
?>
<?php
$sorgu = $db ->prepare("SELECT * From users WHERE id= ?");
$profile = $sorgu ->execute([
    $_SESSION['id']
]);
$profile= $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light rounded align-items-normal justify-content-center mx-0">
        <div class="col-md-6 text-center">
        <div class="text-center position-relative translate-ozel top-200 start-50">
            <img src="img/admin.png" class="rounded" alt="..." style="withh: 100px; height: 100px;">
            </div>
            <div class="mb-3">
            <span style="display: table-cell !important;top: 38px !important;position: relative;right: 33px;"class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="username" class="form-control" value="<?=$profile['username']?>" placeholder="Username" aria-label="Username"
            aria-describedby="basic-addon1">

            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" value="<?=$profile['email']?>"
                aria-describedby="emailHelp">
            </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'assets/lib/footer.php';

?>