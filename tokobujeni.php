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
            <li>
              <a href="login.php" class="btn btn__primary" style="background-color: white; color: #007dab;">
                <span>LOGIN</span>
              </a>
              <a href="bot.php" class="btn btn__primary">
                <span>CHAT</span>
                <i class="icon-arrow-right"></i>
              </a>
            </li>
          </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="assets_guests/images/banners/partner-umkm.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <h1 class="pagetitle__heading mb-0">Toko Bu Jeni</h1>
            <p class="pagetitle__desc mb-0">Bogor - <b><a href="#"></a>Lihat Lokasi</a></b></p>
          </div>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
       shop 
    =========================== -->
    <section id="shop" class="shop-grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="sorting-options d-flex flex-wrap justify-content-between align-items-center mb-30">
              <strong>Showing 1:6 of 12 product</strong>
              <select>
                <option selected="" value="0">Sort by Harga Tertinggi</option>
                <option value="1">Sort by Harga Terendah</option>
              </select>
            </div>
            <div class="row">
              <!-- Product item #1 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item">
                  <div class="service__img">
                    <img src="assets_guests/images/products/tongkoliris.jpg" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Tongkol Iris</h4>
                    <p class="service__desc">Satu kotak berisi 5 sampai 6 iris tongkol segar yang dibungkus</p>
                    <br><h6 class="service__title"><b><a href="#">Rp.5.000/Kotak</a></b></h6>
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
              </div><!-- /.col-lg-4 -->
              <!-- Product item #2 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="assets_guests/images/products/olahan-mujair.jpg" alt="service" loading="lazy">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Ikan Mujair</h4>
                  <p class="service__desc">Ikan mujair adalah salah satu sumber protein yang tak kalah dengan salmon</p>
                  <br><h6 class="service__title"><b><a href="#">Rp.29.500/Kg</a></b></h6>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              </div>
              <!-- Product item #3 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="assets_guests/images/products/olahan-gurame.jpg" alt="service" loading="lazy">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Ikan Gurame</h4>
                  <p class="service__desc">Ikan gurame segar yang mempunyai daging yang kencang dan tidak lembek.</p>
                  <br><h6 class="service__title"><b><a href="#">Rp.41.000/Kg</a></b></h6>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              </div>
              <!-- Product item #1 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="assets_guests/images/products/bawalsegar.png" alt="service" loading="lazy">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Ikan Bawal</h4>
                  <p class="service__desc">“Ikan bawal mengandung berbagai nutrisi baik, seperti asam lemak omega-3</p>
                  <br><h6 class="service__title"><b><a href="#">Rp.39.500/Kg</a></b></h6>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              </div>
              <!-- Product item #2 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="assets_guests/images/products/ikanmas.jpg" alt="service" loading="lazy">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Ikan Mas</h4>
                  <p class="service__desc">Ikan mas mengandung fosfor, kalium, protein yang baik untuk tubuh</p>
                  <br><h6 class="service__title"><b><a href="#">Rp.32.000/Kg</a></b></h6>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              </div>
              <!-- Product item #3 -->
              <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="assets_guests/images/products/ikankerapu.jpg" alt="service" loading="lazy">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Ikan Kerapu</h4>
                  <p class="service__desc">Ikan ini sangat baik untuk dikonsumsi karena mengandung anti-oksidan</p>
                  <br><h6 class="service__title"><b><a href="#">Rp.61.000/Kg</a></b></h6>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                  <ul class="pagination justify-content-center">
                    <li><a class="current" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </nav><!-- /.pagination-area -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-9 -->
          <div class="col-sm-12 col-md-4 col-lg-3">
            <aside class="sidebar-layout2">

              <div class="widget widget-search">
                <h5 class="widget__title">Search</h5>
                <div class="widget__content">
                  <form class="widget__form-search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                  </form>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-search -->
              <div class="service__body">
                <h4 class="service__title"><b>Detail UMKM</b></h4>
                <h6 class="service__title">Deskripsi :</h6>
                <p class="service__desc">Menjual berbagai produk ikan segar dengan harga yang bersaing. Higienis dan kebersihan terjamin disini</p>
                <h6 class="service__title">Lokasi : <b><a href="#">Lokasi</a></b></h6>
                <h6 class="service__title">Waktu Buka : 07.00 - 14.00 WIB </h6>
                <br>
                <div class="d-flex">
                    <a href="search_fish.php" class="btn btn__primary mr-20">
                      <i class="icon-arrow-right"></i><span>Hubungi Sekarang</span>
                    </a>
                </div>

            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop -->

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