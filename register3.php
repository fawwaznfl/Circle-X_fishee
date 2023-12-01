<?php
require 'functions1.php'; 

session_start();

if ( isset($_POST["register"]) ) {

    if( registrasi ($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambah!');
                </script>"; 
    } else {
        echo mysqli_error($conn);
    }
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Fishee - Pasar Ikan Modern">
        <link href="assets_guests/images/favicon/logo-profil.png" rel="icon">
        <title>Fishee - Pasar Ikan Modern</title>
        <link rel="stylesheet" type="text/css" href="assets_guests/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets_guests/css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="assets_guests/css/iofrm-style.css">
        <link rel="stylesheet" type="text/css" href="assets_guests/css/iofrm-theme2.css">
    </head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.php">
                <div class="logo">
                    <img class="logo-size" src="assets_guests/images/gallery/sea.jpg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder" >
                <div class="bg">
                    <img src="assets_guests/images/backgrounds/admin2.png" style="width: 100%;"> 
                </div>
                <div class="info-holder">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <a href="index.php">
                        <img src="assets_guests/images/logo/Fishee-white.png" style="width: 150px;">
                        <div class="page-links">
                            <a href="login.php">Masuk</a><a href="register2.php" class="active">Daftar</a>
                        </div>
                        <form action="" method="post">
                            <input class="form-control" type="email" name="username" placeholder="alamat_email" required>
                            <input class="form-control" type="password" name="password" placeholder="Sandi" required>
                            <input class="form-control" type="text" name="usertype" placeholder="Mau user/partner?" required>
                            <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama_lengkap" required>
                            <input class="form-control" type="text" name="no_telp" placeholder="No_telp" required>
                            <div class="form-button">
                                <!-- button id="submit" type="submit" class="ibtn" style="background-color:#445867;"><a href="login.php">Daftar</a></button> -->
                                <button class="ibtn" type="submit" name="register" style="background-color:#ffffff;">Daftar!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>