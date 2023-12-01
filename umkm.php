<?php
session_start();
include "h00_konfigKoneksiProduk.php";
include ('hitung_rating.php');

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
</head>

<body>
  <div class="wrapper">
<!--
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div> -->
    <!-- /.preloader -->

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
    

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="assets_guests/images/banners/partner.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <h1 class="pagetitle__heading mb-0">Partner UMKM</h1>
            <p class="pagetitle__desc mb-0">Temukan beragam produk berkualitas dari mitra kami yang luar biasa dan siap memenuhi kebutuhan anda </p>
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
              <strong>Menampilkan 1-6 dari 12 UMKM</strong>
              <form action="" method="get" id="sortForm" onchange="submitForm()">
                <select id="sortOption" name="sort">
                  <option value="terbaru" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'terbaru') ? 'selected' : ''; ?>>>
                    Terbaru
                  </option>
                  <option value="umkm-tertinggi" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'umkm-tertinggi') ? 'selected' : ''; ?>>>
                    Rating Tertinggi
                  </option>
                  <option value="umkm-terendah" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'umkm-terendah') ? 'selected' : ''; ?>>>
                    Rating Terendah
                  </option>
                </select>
              </form>
            </div>
            <div class="row">
              <!-- Product item #1 -->

              <?php
              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT DISTINCT tb_pemetaan.id, tb_pemetaan.nama_toko, tb_pemetaan.lokasi, tb_pemetaan.foto_thumbnail, ratee.id_toko
        FROM tb_pemetaan
        LEFT JOIN ratee ON tb_pemetaan.id = ratee.id_toko ";

if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $sql .= " WHERE nama_toko LIKE '%$search%'";
}
if (isset($_GET['sort'])) {
  $sort = $_GET['sort'];
  switch ($sort) {
      case 'terbaru':
          $sql .= " ORDER BY tb_pemetaan.id DESC";
          break;
      case 'umkm-tertinggi':
          $sql .= " ORDER BY (SELECT AVG(rate) FROM ratee WHERE id_toko = tb_pemetaan.id) DESC";
          break;
      case 'umkm-terendah':
          $sql .= " ORDER BY (SELECT AVG(rate) FROM ratee WHERE id_toko = tb_pemetaan.id) ASC";
          break;
      default:
          // Handle unknown sort values or add a default sorting option
          break;
  }
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    $nomor = 1;

    while ($row = $result->fetch_assoc()) {
        $id_produk = $row["id"];
        $nama_toko = $row["nama_toko"];
        $lokasi = $row["lokasi"];
        $foto_thumbnail = 'images/' . $row["foto_thumbnail"];

        // You can retrieve the average rating here and use it in your output
        $queryAvgRating = "SELECT AVG(rate) AS average_rating FROM ratee WHERE id_toko = " . $row["id"];
        $resultAvgRating = $conn->query($queryAvgRating);

        if ($resultAvgRating && $rowAvgRating = $resultAvgRating->fetch_assoc()) {
            $average_rating = $rowAvgRating["average_rating"];
        } else {
            $average_rating = 0; // Default value if there are no ratings yet
        }

        echo "
        <div class=\"col-sm-6 col-md-6 col-lg-4\">
            <div class=\"product-item\">
                <div class=\"product__img\">
                    <img src=\"$foto_thumbnail\" width='275' height='275'>
                </div>    
                <div class=\"product__action\"> 
                </div>
                <div class=\"product__info\">
                    <h4 class=\"product__title\"><a href=\"tokopandu.php?id={$id_produk}\">$nama_toko</a></h4>
                    <span class=\"product__price\">$lokasi</span> <br />
                    <h4 class=\"product__price\"> <img src=\"assets_guests/images/umkm/star.png\" alt=\"\">  | " . number_format($average_rating, 1) . "</h4>
                </div>
            </div>
        </div>
        ";

        $nomor++;
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>


              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="product-item">
                  <div class="product__img">
                    <div class="product__action">
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            
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
                <h5 class="widget__title">Temukan</h5>
                <div class="widget__content">
                  <form action="umkm.php" method="GET" class="widget__form-search">
                    <input name="search" type="text" class="form-control" placeholder="Temukan UMKM..." autocomplete="off">
                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                  </form>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-search -->
              </div><!-- /.widget-filter -->
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
  <script>
    function sortHandler(value) {
    if(value == "umkm"){
        window.location.assign(`umkm.php`);
    }
    else if(value == "umkm-tertinggi"){
        window.location.assign(`umkm-tertinggi.php`);
    }
    else if(value == "umkm-terendah"){
        window.location.assign(`umkm-terendah.php`);
    }
  }
</script>

<script>
    function submitForm() {
        // Mendapatkan nilai yang dipilih dari dropdown
        var selectedSort = document.getElementById("sortOption").value;

        // Menetapkan nilai yang dipilih sebagai nilai dropdown yang dipilih pada formulir
        document.getElementById("sortForm").action = "umkm.php?sort=" + selectedSort;

        // Mengubah atribut selected pada opsi yang dipilih
        var options = document.getElementById("sortOption").options;
        for (var i = 0; i < options.length; i++) {
            options[i].selected = options[i].value === selectedSort;
        }

        // Mengirim formulir
        document.getElementById("sortForm").submit();
    }
</script>
</body>

</html>