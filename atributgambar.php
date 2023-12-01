<?php
  session_start();
  include "h00_konfigKoneksiProduk.php";

  // Periksa tipe pengguna yang sudah login
  $tipe_pengguna = isset($_SESSION['usertype']) ? $_SESSION['usertype'] : '';

  // Fungsi untuk mengecek apakah pengguna sudah login atau belum
  function isUserLoggedIn() {
      return isset($_SESSION['username']);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Fishee - Pasar Ikan Modern">
  <link href="assets_guests/images/favicon/logo-profil.png" rel="icon">
  <title>Fishee - Pasar Ikan Modern</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="assets_guests/css/libraries.css"> 
  <link rel="stylesheet" href="assets_guests/css/style.css">
  <script src="https://kit.fontawesome.com/17f6f0a605.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="assets_guests/images/logo/Fishee-header.png" class="logo" alt="logo"  width="140" height="70">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav">
              <li class="nav__item">
                <a href="index.php" class="nav__item-link">Beranda</a>
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" class="nav__item-link">Pasar Ikan</a>
                <button class="dropdown-toggle" data-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="olahanikan.php" class="nav__item-link">Olahan Ikan</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="ikansegar.php" class="nav__item-link">Ikan Segar</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="umkm.php" class="nav__item-link">Partner UMKM</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="lokasipemetaan.php" class="nav__item-link">Lokasi</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="kontak-kami.php" class="nav__item-link">Kontak Kami</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          
          <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
          <?php
              if (isUserLoggedIn()) {
                // Jika pengguna sudah login, tampilkan tombol sesuai dengan tipe pengguna
                if ($tipe_pengguna === 'administrator') {
                    echo '<li><a href="dashboard-vendor.php" class="btn btn__primary"><span>DASHBOARD</span></a></li>';
                } elseif ($tipe_pengguna === 'partner') {
                    echo '<li><a href="dashboard_partner.php" class="btn btn__primary"><span>DASHBOARD</span></a></li>';
                } elseif ($tipe_pengguna === 'user') {
                    echo '<li><a href="dashboard-user.php" class="btn btn__primary"><span>DASHBOARD</span></a></li>';
                }else {
                  echo '<li><a href="dashboard-user.php" class="btn btn__primary"><span>'.$tipe_pengguna.'</span></a></li>';
                }
            } else {
                // Jika pengguna belum login, tampilkan tombol login
                echo '<li><a href="login.php" class="btn btn__primary"><span>MASUK</span></a></li>';
            }
            ?>
          </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <section class="features-layout2 pt-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title">Atribut Gambar</h3>
            <p class="heading__desc mb-30" >
              <br>
              <br>Gambar oleh <a href="https://www.freepik.com/free-photo/seafood-dish-assortment-copy-space_9659670.htm#from_view=detail_serie">Freepik</a>
              <br>Gambar oleh <a href="https://www.freepik.com/free-vector/shop-with-sign-we-are-open_8274985.htm#query=store&position=2&from_view=search&track=sph">Freepik</a>
              
              <br><a href="https://www.freepik.com/free-photo/grilled-fish-tomato-onion-calamary-green-salad-top-view_7824876.htm#query=berbagai%20olahan%20ikan&position=5&from_view=search&track=ais">Gambar oleh stockking</a> pada Freepik
              
              <br><a href="https://www.freepik.com/free-photo/raw-fish_1328667.htm?query=pasar%20ikan#from_view=detail_alsolike#position=4&query=pasar%20ikan">Gambar oleh bearfotos</a> pada Freepik
                
              <br><a href="https://www.freepik.com/free-ai-image/colorful-crowded-fish-market-offers-abundance-fresh-seafood-variety-generated-by-ai_49572592.htm#query=pasar%20tradisional%20ikan&position=39&from_view=search&track=ais">Gambar oleh vecstock</a>
              
              <br><a href="https://www.freepik.com/free-vector/world-map-with-global-technology-social-connection-network-with-nodes-links-vector-illustration_1158187.htm#query=world%20map&position=19&from_view=search&track=ais">Gambar oleh macrovector</a> pada Freepik
              
              <br>Gambar oleh <a href="https://www.freepik.com/free-photo/man-working-call-center-with-headphones-computer_22196546.htm">Freepik</a>
              
              <br><a href="https://www.freepik.com/free-photo/business-hands-joined-together-teamwork_2769134.htm#query=about%20us&position=10&from_view=search&track=ais">Gambar oleh rawpixel.com</a> pada Freepik
              
              <br><a href="https://www.freepik.com/free-photo/raw-fish_1328667.htm?query=pasar%20ikan#from_view=detail_alsolike#position=4&query=pasar%20ikan">Gambar oleh bearfotos</a>
              <br><a href="https://www.freepik.com/free-photo/spicy-fried-tubtim-fish-salad-spicy-thai-food_10401029.htm#query=makanan%20ikan&position=1&from_view=search&track=ais">Gambar oleh jcomp</a> pada Freepik
              
              <br><a href="https://www.freepik.com/free-photo/sour-curry-with-snakehead-fish-spicy-garden-hot-pot-thai-food_10400656.htm#query=olahan%20ikan&position=0&from_view=search&track=ais">Gambar oleh jcomp</a> pada Freepik
              
              <br><a href="https://www.freepik.com/free-photo/fried-tilapia-with-chili-sauce-lemon-salad-garlic-plate-white-wooden-table_7370250.htm#query=ikan%20bakar&position=0&from_view=search&track=ais">Gambar oleh jcomp</a> pada Freepik
              <br><a href="https://www.freepik.com/free-photo/outdoor-restaurant-with-wooden-chairs-tables_27572471.htm#query=restoran&position=3&from_view=search&track=sph">Gambar oleh wirestock</a> pada Freepik
              <br><a href="https://www.freepik.com/free-photo/tom-yum-crab-with-lemon-chili-tomato-garlic-lemongrass-kaffir-lime-leaves-plate_10311742.htm#&position=0&from_view=search&track=ais">Gambar oleh jcomp</a> pada Freepik</p>

          </div><!-- /col-lg-5 -->
        </div>
      </div>
    </section>
    
    

<!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
        <div class="footer-primary">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-contact">
                <h5 class="footer-widget-title">FISHEE</h5>
                <div class="footer-widget-content">
                  <p class="mb-20">Sebuah platform untuk mempermudah UMKM perikanan untuk menjual berbagai macam jenis ikan segar dan olahan ikan. Dengan teknologi pencarian lokasi dan pemetaan untuk mempermudah pembeli dalam menemukan lokasi ikan pilihan.</p>
                </div><!-- /.footer-widget-content -->
              </div><!-- /.col-xl-3 -->
              <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                <h6 class="footer-widget-title">Lainnya</h6>
                <div class="footer-widget-content">
                  <nav>
                    <ul class="list-unstyled">
                      <li><a href="tentang-kami.php">Tentang Kami</a></li>
                      <li><a href="Tim-kami.php">Tim Kami</a></li>
                      <li><a href="kontak-kami.php">Kontak Kami</a></li>
                      <li><a href="atributgambar.php">Atribut Gambar</a></li>
                    </ul>
                  </nav>
                </div><!-- /.footer-widget-content -->
              </div><!-- /.col-xl-2 -->
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-contact">
                <h6 class="footer-widget-title">Kunjungi</h6>
                <div class="footer-widget-content">
                  <p class="mb-20">Email :<a href="">fishee@gmail.com</a></p>
                  <div class="contact__number d-flex align-items-center mb-30">
                    <i class="icon-phone"></i>
                    <a href="" class="color-primary">0812-7739-6789</a>
                  </div><!-- /.contact__numbr -->
                  <p class="mb-20">Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128</p>
                </div><!-- /.footer-widget-content -->
              </div><!-- /.col-xl-3 -->
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-align-right">
                <h6 class="footer-widget-title">Follow Kami</h6>
                <div class="footer-widget-content">
                  <ul class="social-icons list-unstyled">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-times"></i></a></li>
                  </ul><!-- /.social-icons -->
                  <br><br>
                </div><!-- /.footer-widget-content -->
              </div><!-- /.col-xl-3 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.footer-primary -->
        <div class="footer-copyrights">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between">
                <nav>
                  <ul class="copyright__nav d-flex flex-wrap list-unstyled mb-0">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </nav>
                <p class="mb-0">
                  <span class="color-gray">&copy; 2023 Fishee, All Rights Reserved</span>
                </p>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.footer-copyrights-->
      </footer><!-- /.Footer -->
      <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  
    </div><!-- /.wrapper -->
  
    <script src="assets_guests/js/jquery-3.5.1.min.js"></script>
    <script src="assets_guests/js/plugins.js"></script>
    <script src="assets_guests/js/main.js"></script>
  </body>
  
  </html>