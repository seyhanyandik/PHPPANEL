<?php
@session_start();
@ob_start();
define("DATA","data/");
define("PAGE","include/");
include_once("class/FL.php");
include_once("class/DB.php");
include_once("class/User.php");
$settings=DB::table("settings")->where("ID",1)->first();
define("SITE",$settings->url."admin/");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giriş Yap - Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="<?=SITE?>project/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=SITE?>project/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body data-url="<?=SITE?>">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Yönetim Paneli</h1>
                                    </div>
                                    <form action="javascript:void(0)" method="post">
                                        <div class="form-group">
                                            <label id="Username">Kullanıcı Adı / E-Mail Adresi</label>
                                            <input type="username" class="form-control form-control-user"
                                                id="username" aria-describedby="userHelp"
                                                placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <label id="new-password">Parola</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="remember">
                                                <label class="custom-control-label" for="remember">Beni
                                                    Hatırla</label>
                                            </div>
                                        </div>
                                        <!-- ahref class button class ile değiştirildi. -->
                                        <div class="mt-4">
                                                <button class="btn btn-primary btn-user btn-block loginBtn" type="button">Giriş Yap</button>
                                        </div>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="#">Şifremi Unuttum</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src= "https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> 
    <!-- Bootstrap core JavaScript-->
    <script src="<?=SITE?>project/vendor/jquery/jquery.min.js"></script>
    <script src="<?=SITE?>project/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=SITE?>project/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=SITE?>project/js/sb-admin-2.min.js"></script>

    <script src="<?=SITE?>project/js/main.js"></script>


</body>

</html>