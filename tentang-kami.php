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
            <li>
              <a href="login.php" class="btn btn__primary">
                <span>MASUK</span>
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
      <div class="bg-img"><img src="assets_guests/images/banners/tentangkami.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading mb-0">Tentang Kami</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><a href="#">Tentang Kami</a></li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
    Features Layout 2
    ========================= -->
    <section class="features-layout2 pt-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title">Kenapa harus menggunakan FISHEE?</h3>
            <p class="heading__desc mb-30" >Website Fishee adalah website yang dibuat untuk memberikan solusi atas 
              permasalahan pangan di Indonesia. Sistem yang dibangun adalah aplikasi berbasis 
              website. Aplikasi Fishee memanfaatkan pemetaan penggunaan QGIS, bertujuan 
              memudahkan konsumen dalam mencari dan menemukan lokasi penjual ikan dan 
              olahan ikan, Fishee menyediakan layanan penghubung antara konsumen dan penjual. 
              pada website Fishee terdapat fitur yang memudahkan konsumen dalam menemukan 
              lokasi penjual ikan yaitu fitur pemetaan. Fishee juga terdapat fitur pasar yang nantinya 
              akan dibagi menjadi beberapa bagian seperti ikan untuk langsung di konsumsi oleh 
              masyarakat dan ikan segar untuk diolah lagi untuk menjadi masakan </p>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <div class="row">
              <!-- Feature item #1 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="fa-solid fa-database"></i>
                  </div>
                  <h4 class="feature__title">Data Yang Terpusat</h4>
                  <p class="feature__desc">Data yang terpusat adalah manajemen data di mana semua informasi dan pengolahan data dilakukan dari satu pusat data tunggal. 
                    Semua data, termasuk data pelanggan, data produk, data transaksi, dan data lainnya, disimpan di satu lokasi sentral.
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #2 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <h4 class="feature__title">Lacak Partner UMKM</h4>
                  <p class="feature__desc">Lacak Partner UMKM adalah sebuah fitur atau layanan yang disediakan untuk membantu pengguna menemukan dan memonitor mitra atau usaha UMKM, Fitur ini memungkinkan pengguna untuk mencari, melacak, dan berinteraksi dengan berbagai UMKM yang telah terdaftar.
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #3 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="fa-regular fa-star"></i>
                  </div>
                  <h4 class="feature__title">Rating & Sortir</h4>
                  <p class="feature__desc">Fitur ini memungkinkan pengguna untuk mengurutkan dan menilai produk, layanan, atau konten berdasarkan preferensi dan pengalaman mereka sendiri, Ini membantu pengguna dalam menemukan informasi yang paling relevan dan berkualitas sesuai dengan kebutuhan mereka.
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #4 -->
              <div class="col-sm-6">
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="fa-solid fa-headset"></i>
                  </div>
                  <h4 class="feature__title">ChatBot</h4>
                  <p class="feature__desc">ChatBot adalah sebuah program komputer yang dirancang untuk berkomunikasi dengan manusia melalui percakapan berbasis teks atau suara, Keuntungan utama dari ChatBot adalah peningkatan efisiensi dan aksesibilitas.
                  </p>
                </div><!-- /.feature-item -->
              </div><!-- /.col-sm-6 -->
              <!-- Feature item #5 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->
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