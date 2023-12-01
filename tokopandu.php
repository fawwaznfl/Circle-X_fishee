<?php
session_start();
include "db_conn-ulasan.php";
include ('hitung_rating.php');

  // Periksa tipe pengguna yang sudah login
  $tipe_pengguna = isset($_SESSION['usertype']) ? $_SESSION['usertype'] : '';

  // Fungsi untuk mengecek apakah pengguna sudah login atau belum
  function isUserLoggedIn() {
      return isset($_SESSION['username']);
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the id_toko from the form submission
  $id_toko = $_POST['id_toko'];
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
  <link rel="stylesheet" href="assets_guests/css/libraries.css">
  <link rel="stylesheet" href="assets_guests/css/style.css">
  </head>

<body>
  <div class="wrapper">
    <!-- <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div> -->

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
    <?php
    require 'db_conn-ulasan.php';
    //$query_toko = "SELECT * FROM tb_pemetaan WHERE id=18";

    /*
    $query_toko = "SELECT tb_produk.*, tb_pemetaan.*, ratee.* FROM tb_produk
                        INNER JOIN tb_pemetaan ON tb_produk.id_toko = tb_pemetaan.id
                        INNER JOIN ratee ON tb_produk.id_toko = ratee.id_toko";
    $res_toko = $conn->query($query_toko);
    $row_toko = $res_toko->fetch_assoc();
    */

// Retrieve product ID from the URL
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Fetch product details from the database using $product_id
    // Replace this with your actual database query to get product details
    $query_toko = "SELECT * FROM tb_pemetaan LEFT JOIN ratee ON tb_pemetaan.id = ratee.id_toko WHERE tb_pemetaan.id = $product_id";
    $res_toko = $conn->query($query_toko);

    if ($res_toko->num_rows > 0) {
        $row_toko = $res_toko->fetch_assoc();

        // Now you can use $row to display the product details on the page
        $nama_toko = $row_toko["nama_toko"];
        $lokasi = $row_toko["lokasi"];
        $foto_thumbnail = 'images/' . $row_toko["foto_thumbnail"];
        // Calculate the average rating using SQL
        $queryAvgRating = "SELECT AVG(rate) AS average_rating FROM ratee WHERE id_toko = " . $product_id;
        $resultAvgRating = $conn->query($queryAvgRating);

        if ($resultAvgRating && $rowAvgRating = $resultAvgRating->fetch_assoc()) {
            $rataan = $rowAvgRating["average_rating"];
        } else {
            $rataan = 0; // Default value if there are no ratings yet
        }

        // Display the product details

    } else {
        echo "Product not found";
    }
} else {
    echo "Product ID not provided";
}

    ?>
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="assets_guests/images/banners/tokopandu68.jpeg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <h1 class="pagetitle__heading mb-0"><?php echo $row_toko['nama_toko']?></h1>
            <h4 class="product__price white-text"><?php echo $row_toko['lokasi'];?></h4>
            <?php 
            //var_dump($rataan); 
            $rataan = floatval($rataan); // Convert to float
            echo "<h4 class=\"product__price white-text\"><img src=\"assets_guests/images/umkm/star.png\" alt=\"\"> | " . number_format($rataan, 1) . "</h4>";
            ?>
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
              <strong>Menampilkan Produk Toko</strong>
              <form action="tokopandu.php" method="get" id="sortForm" onchange="submitForm()">
                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                <select id="sortOption" name="sort">
                    <option value="harga_desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'harga_desc') ? 'selected' : ''; ?>>
                        Sort by Harga Tertinggi
                    </option>
                    <option value="harga_asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'harga_asc') ? 'selected' : ''; ?>>
                        Sort by Harga Terendah
                    </option>
                </select>
            </form>
            </div>
            <div class="row">

            <?php
              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql_item = "SELECT * FROM tb_produk WHERE id_toko = $product_id ";

            if (isset($_GET['search'])) {
                $search = $_GET['search'];
                $sql_item = "SELECT * FROM tb_produk WHERE id_toko = $product_id AND nama_Produk LIKE '%$search%'";
            } else if (isset($_GET['sort']) && $_GET['sort'] === 'harga_asc'){
                $sql_item = "SELECT * FROM tb_produk WHERE id_toko = $product_id ORDER BY harga ASC";
            } else if (isset($_GET['sort']) && $_GET['sort'] === 'harga_desc'){
                $sql_item = "SELECT * FROM tb_produk WHERE id_toko = $product_id ORDER BY harga DESC";
            }
            
            $result_item = $conn->query($sql_item);

              if ($result_item->num_rows > 0) {
                  // Output data of each row
                  $nomor = 1;

                  while ($row_item = $result_item->fetch_assoc()) {
                      $id_produk = $row_item["id"];
                      $nama_produk = $row_item["nama_Produk"];
                      $harga = $row_item["harga"];
                      //$toko = $row_item["toko"];
                      $deskripsi = $row_item["deskripsi"];
                      $foto_produk = 'images/' . $row_item["foto_produk"];

                      echo "
                      <div class=\"col-sm-6 col-md-6 col-lg-4\">
                      <div class=\"product-item\">
                          <div class=\"product__img\">
                              <img src=\"$foto_produk\" width='250' height='250'>
                          </div>  
                          <br />  
                          <div class=\"product__body\">
                              <h4 class=\"product__title\"><a href=\"#\">$nama_produk</h4></a>
                              <p class=\"product__desc\">$deskripsi</p> <br />
                              <p class=\"product__price\">Rp.$harga</p> <br />
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
                <h5 class="widget__title">Temukan Produk</h5>
                <div class="widget__content">
                  <form action="" method="GET" class="widget__form-search">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <input name="search" type="text" class="form-control" placeholder="Temukan Produk..." autocomplete="off">
                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                  </form>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-search -->
              <div class="product__details mt-20">
                <nav class="nav nav-tabs">
                  <a class="nav__link active" data-toggle="tab" href="#Description">Detil UMKM</a>
                  <a class="nav__link" data-toggle="tab" href="#Details">Ulasan</a>
                  
                </nav>
                <div class="tab-content mb-50" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="Description">
                    <h4 class="service__title"><b>Deskripsi</b></h4>
                    <p class="service__desc"><?php echo $row_toko['deskripsi'];?></p>
                <h6 class="service__title"><?php echo $row_toko['lokasi'];?></h6>
                <h6 class="service__title">Waktu Buka : <?php echo $row_toko['jam_operasional'];?> </h6>
                <br>
                  <div class="d-flex">
                    <a href="https://wa.me/<?php echo $row_toko['no_telpon'];?>" class="btn btn__primary mr-20">
                      <i class="icon-arrow-right"></i><span>Hubungi Sekarang</span>
                    </a>
                  </div>
                  </div><!-- /.desc-tab -->
                  <div class="tab-pane fade" id="Details">
                    <div class="container">
                     <div class="row">
                     <?php
                     if (isUserLoggedIn()) {?>
                      <form action="add_ulasan.php" method="post">
                        <div>
                          <h4>Penilaian dan ulasan</h4>
                        </div> 

                        <!-- <div style="margin-top: 10px;">
                          <label > name</label> <br>
                          <input type="text" name="name">
                        </div> -->
                        
                        <div>
                          <h6>Beri Penilaian</h6>
                          <div class="rateyo" id= "rating" style="margin-top: 10px;"
                          date-rateyo-rating="4"
                          date-rateyo-num-stars="5"
                          date-rateyo-score="3">
                        </div>
                        <span class='result'>0</span>
                        <input type="hidden" name="rating">
                        </div>
                        <br>
                        <div>
                        <label for="ulasan" style="font-size: 16px;"> Ulasan </label> <br>
                        <textarea name="ulasann" style="width: 100%; height: 100px;" ></textarea>
                      </div>
                        
                      <input type="hidden" name="id_toko" value="<?php echo $product_id; ?>">
                      <div>
                        <button type="submit" name="add" class="btn btn__primary mt-20">
                          Kirim
                        </button>
                      </div>

                      </form>
<?php }else {
                          echo"Untuk bisa mengakses ulasan, silahkan login terlebih dahulu";
                        } ?>

                     </div>
                    </div>
                  
                  </div><!-- /.details-tab -->
                  
  
                       
                    </form>
                  </div><!-- /.reviews-tab -->
                </div>
              </div><!-- /.product-tabs -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop -->

    <!-- =====================
         testimonials
      ======================== -->
      <section class="testimonials-layout2 pt-0 pb-60">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="slick-carousel gutter-20"
                data-slick='{"slidesToShow": 2, "arrows": false, "dots": true, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 1}}]}'>
                
                <?php 
                require 'db_conn-ulasan.php';
                //$query_ulasan= "SELECT * FROM ratee" ;
                /*
                $query_ulasan = "SELECT DISTINCT tb_produk.*, tb_pemetaan.*, ratee.* FROM tb_produk
                INNER JOIN tb_pemetaan ON tb_produk.id_toko = tb_pemetaan.id
                INNER JOIN ratee ON tb_produk.id_toko = ratee.id_toko
                WHERE ratee.id_toko = $product_id";
                $result_ulasan = $conn->query($query_ulasan);
                */
                $query_ulasan = "SELECT DISTINCT tb_pemetaan.*, ratee.* FROM ratee
                INNER JOIN tb_pemetaan ON ratee.id_toko = tb_pemetaan.id
                WHERE ratee.id_toko = $product_id";

                $result_ulasan = $conn->query($query_ulasan);
            
                ?>

                <!-- Testimonial #1 -->
                <?php
    // Create an array to store unique testimonials based on ulasann
    $uniqueTestimonials = [];

    // Loop through the result set
    while ($row_ulasan = $result_ulasan->fetch_assoc()) {
        // Check if ulasann is not in the uniqueTestimonials array
        if (!in_array($row_ulasan['ulasann'], $uniqueTestimonials)) {
            // Display the testimonial
            ?>
            <div class="testimonial-item d-flex">
                <!-- Display testimonial details -->
                <div class="testimonial__thumb">
                    <img src="assets_guests/images/testimonials/thumbs/1.png" alt="thumb">
                </div><!-- /.testimonial__thumb -->
                <div>
                    <div class="testimonial__rating d-flex align-items-center">
                        <div class="mr-20">
                            <i class="fas fa-star"><?php echo $row_ulasan['rate'] ?></i>
                        </div>
                        <strong class="color-primary"></strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc"><?php echo $row_ulasan['ulasann'] ?></h4>
                    <div class="testimonial__meta">
                        <h4 class="testimonial__meta-title"><?php echo $row_ulasan['name'] ?></h4>
                    </div><!-- /.testimonial-meta -->
                    <div class="dropdown">
                        <button onclick="toggleDropdown(this)" class="dropbtn">Balasan Toko</button>
                        <div class="dropdown-content" style="display: none;">
                            <p><?php echo $row_ulasan['balasan'] ?></p>
                            <!-- Tambahkan konten balasan atau detail lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div><!-- /. testimonial-item -->
            <?php
            // Add ulasann to the uniqueTestimonials array
            $uniqueTestimonials[] = $row_ulasan['ulasann'];
        }
    }
    ?>

                  

                
              </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->

          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonials -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>


<script>
  $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>

<script>
        // Skrip JavaScript Anda
        function toggleDropdown(button) {
            var dropdownContent = button.nextElementSibling;
            if (dropdownContent.style.display === "none" || dropdownContent.style.display === "") {
                dropdownContent.style.display = "block";
            } else {
                dropdownContent.style.display = "none";
            }
        }
    </script>

<script>
    function submitForm() {
        // Mendapatkan nilai yang dipilih dari dropdown
        var selectedSort = document.getElementById("sortOption").value;

        // Menetapkan nilai yang dipilih sebagai nilai dropdown yang dipilih pada formulir
        document.getElementById("sortForm").action = "tokopandu.php?sort=" + selectedSort;

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

