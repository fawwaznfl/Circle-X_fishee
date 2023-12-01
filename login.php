<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "fishee";

session_start();

$data = mysqli_connect($host, $user, $password, $db);
if (!$data) {
    die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($data, $_POST["username"]);
    $password = mysqli_real_escape_string($data, $_POST["password"]);

    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";

    $result = mysqli_query($data, $sql);

    if ($result) {
        $row = mysqli_fetch_array($result);

        if ($row) {            
            $_SESSION["nama_lengkap"] = $row["nama_lengkap"];  
            $_SESSION["username"] = $row["username"];
            $_SESSION["no_telp"] = $row["no_telp"];
            $_SESSION["usertype"] = $row["usertype"];
            if ($row["usertype"] == "user") {
                
                header("location:index.php");
            } elseif ($row["usertype"] == "administrator") {                
                $_SESSION["nama_lengkap"] = $row["nama_lengkap"];  
                $_SESSION["username"] = $row["username"];
                $_SESSION["no_telp"] = $row["no_telp"];
                $_SESSION["usertype"] = $row["usertype"];
                header("location:dashboard-vendor.php");

            } elseif ($row["usertype"] == "partner") {
                        
                $_SESSION["nama_lengkap"] = $row["nama_lengkap"];  
                $_SESSION["username"] = $row["username"];
                $_SESSION["no_telp"] = $row["no_telp"];
                $_SESSION["usertype"] = $row["usertype"];
                header("location:dashboard_partner.php");
                
            } else {
                echo "<script>
                alert('username dan password salah! ');
                </script>"; 
            }
        } else {
            echo "<script>
                alert('username dan password salah! ');
                </script>"; 
        }
    } else {
        echo "Query error: " . mysqli_error($data);
    }
}

mysqli_close($data);
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
                            <img src="assets_guests/images/logo/Fishee-white.png" style="width: 150px;"></a>
                            <div class="page-links">
                        <div class="page-links">
                            <a href="login2.php" class="active">Masuk</a>
                            <a href="register2.php">Daftar</a>
                        </div>
                        <form action="#" method="POST"> 
                            <input class="form-control" type="text" name="username" placeholder="Alamat E-mail" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input type="checkbox" id="chk1"><label for="chk1">Ingat Saya</label>
                        <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="forget.php">Lupa Password?</a>                                
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