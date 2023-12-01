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
    <section class="page-title pt-30 pb-30">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mt-0">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Ikan Olahan</a></li>
                <li class="breadcrumb-item"><a href="#">Toko Pandu 68</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ikan Cabe Oseng</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
       shop single
    =========================== -->
    <section class="shop pb-40 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row product-item-single">
              <div class="col-sm-6">
                <div class="product__img">
                  <img src="assets_guests/images/products/olahan ikan nila.jpg" class="zoomin" alt="product" loading="lazy">
                </div><!-- /.product-img -->
              </div>
              <div class="col-sm-6">
                <h1 class="product__title"> Ikan Cabe Oseng </h1>
                <div class="product__meta-review mb-20">
                  <span class="product__rating">
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star"></i>
                  </span>
                  <span>4 Review(s)</span>
                  <a href="#">Add Review</a>
                </div><!-- /.product-meta-review -->
                <span class="product__price mb-20">$ 14.00</span>
                <div class="product__desc">
                  <p>Toko
                  </p>
                </div><!-- /.product-quantity -->
                <div class="product__meta-details">
                  <ul class="list-unstyled mb-30">
                    <li><span>SKU :</span> <span>#0214</span></li>
                    <li><span>Category :</span> <span>Vitamins</span></li>
                    <li><span>Tags :</span> <span>Beauty, Supplements</span></li>
                  </ul>
                </div><!-- /.product__meta-details -->

                <p> <a class="btn btn__secondary h-50px" href="#">
                    <style>
                
                        .btn img {
                            margin-right: 10px; /* Jarak antara logo dan teks (diubah sesuai kebutuhan) */
                            max-height: 30px; /* Ubah tinggi maksimum logo */
                            max-width: 30px; /* Ubah lebar maksimum logo */
                        }
                    </style>
                    <img src="assets_guests/images/logo/logo toko.png" alt="Logo UMKM"> Hubungi UMKM</a></p>
            
            </div><!-- /.row -->
            <div class="product__details mt-100">
              <nav class="nav nav-tabs">
                <a class="nav__link active" data-toggle="tab" href="#Description">Description</a>
                <a class="nav__link" data-toggle="tab" href="#Details">Details</a>
                
              </nav>
              <div class="tab-content mb-50" id="nav-tabContent">
                <div class="tab-pane fade show active" id="Description">
                  <p>Ikan Nila merupakan ikan konsumsi yang umum hidup di perairan tawar, terkadang ikan Nila juga ditemukan hidup di perairan yang agak asin (payau).
                    Ikan Nila dikenal sebagai ikan yang bersifat euryhaline (dapat hidup pada kisaran salinitas yang lebar).</p>
                </div><!-- /.desc-tab -->
                <div class="tab-pane fade" id="Details">
                  <p>Ikan Nila (Oreochromis nilloticus) merupakan salah satu komoditas ikan air tawar di Indonesia.
                    Ikan nila memiliki kemampuan menyesuaikan diri yang baik dengan lingkungan sekitarnya.
                    Klasifikasi ikan nila (Oreochomis nilloticus) menurut Saanin (1984)</p>
                  <p>Nilai kandungan gizi ikan dapat menentukan kualitas dari ikan tersebut.Nilai kandungan gizi yang ada di dalam daging ikan sangat baik karena mudah 
                    dicerna dan memiliki nilai biologis yang lebih tinggi jika dibandingkan dengan daging hewani lainnya (Ciptanto 2010). 
                    Kandungan gizi dalam ikan dapat diketahui melalui analisis proksimat. Menurut Retno Yuni, dkk (2015), nilai gizi yang terdapat pada ikan nila antara lain, 
                    yaitu kadar air (76,34%), protein (18,73%), lemak (2,51%) dan karbohirat (0,18%).</p>
                </div><!-- /.details-tab -->
                

                     
                  </form>
                </div><!-- /.reviews-tab -->
              </div>
            </div><!-- /.product-tabs -->
        

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                  <div class="heading text-center mb-40">
                    <h2 class="heading__title fz-25" style="color: black;">Berbagai Produk Dari Toko Ini</h2>
                  </div><!-- /heading -->
                </div><!-- /.col-lg-6 -->
            <div class="col-12">
            <div class="slick-carousel carousel-arrows-light"
            data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2, "slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
            <!-- service item #1 -->
            <div class="service-item">
              <div class="service__img">
                <img src="assets_guests/images/services/kuwebakar.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Kuwe Bakar</h4>
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
                <a href=".php" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Kunjungi</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
            <!-- service item #2 -->
            <div class="service-item">
              <div class="service__img">
                <img src="assets_guests/images/services/gurameasammanis.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Gurame Asam Manis</h4>
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                <a href=".php" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Kunjungi</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
            <!-- service item #3 -->
            <div class="service-item">
              <div class="service__img">
                <img src="assets_guests/images/services/lelegoreng.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Lele Goreng</h4>
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                <a href=".php" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Kunjungi</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
            <!-- service item #4 -->
            <div class="service-item">
              <div class="service__img">
                <img src="assets_guests/images/services/mujairkecap.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Mujair Kecap</h4>
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                <a href=".php" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Kunjungi</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
            <!-- service item #5 -->
            <div class="service-item">
              <div class="service__img">
                <img src="assets_guests/images/services/guramebakar.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Gurame Bakar</h4>
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua </p>
                <a href=".php" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Kunjungi</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
            <!-- service item #6 -->
            <div class="service-item">
              <div class="service__img">
                <img src="assets_guests/images/services/guramekuahasam.jpg" alt="service" loading="lazy">
              </div><!-- /.service__img -->
              <div class="service__body">
                <h4 class="service__title">Gurame Kuah Asam</h4>
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href=".php" class="btn btn__secondary btn__outlined btn__custom">
                  <span>Kunjungi</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service__body -->
            </div><!-- /.service-item -->
          </div><!-- /.carousel-->
        </div><!-- /.col-12 -->
              
            </div><!-- /.row -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop single -->

    <!-- =====================
         testimonials
      ======================== -->
      <section class="testimonials-layout2 pt-0 pb-60">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="slick-carousel gutter-20"
                data-slick='{"slidesToShow": 2, "arrows": false, "dots": true, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 1}}]}'>
                <!-- Testimonial #1 -->
                <div class="testimonial-item d-flex">
                  <div class="testimonial__thumb">
                    <img src="assets_guests/images/testimonials/thumbs/1.png" alt="thumb">
                  </div><!-- /.testimonial__thumb -->
                  <div>
                    <div class="testimonial__rating d-flex align-items-center">
                      <div class="mr-20">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <strong class="color-primary">Perfect Choice!!</strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc">They were fantastic through the entire purchase process. I had lots of
                      questions and they were patient. My system arrived it was well packed and shipping with xpo.
                    </h4>
                    <div class="testimonial__meta">
                      <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                      <p class="testimonial__meta-desc">Front End Developer</p>
                    </div><!-- /.testimonial-meta -->
                  </div>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item d-flex">
                  <div class="testimonial__thumb">
                    <img src="assets_guests/images/testimonials/thumbs/2.png" alt="thumb">
                  </div><!-- /.testimonial__thumb -->
                  <div>
                    <div class="testimonial__rating d-flex align-items-center">
                      <div class="mr-20">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <strong class="color-primary">Excellent!!</strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc">They helped lead me through the process of system selection, site layout
                      and placing my order. They were very knowledgeable and has provided guidance each step.
                    </h4>
                    <div class="testimonial__meta">
                      <h4 class="testimonial__meta-title">John Peter</h4>
                      <p class="testimonial__meta-desc">pro systems</p>
                    </div><!-- /.testimonial-meta -->
                  </div>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item d-flex">
                  <div class="testimonial__thumb">
                    <img src="assets_guests/images/testimonials/thumbs/3.png" alt="thumb">
                  </div><!-- /.testimonial__thumb -->
                  <div>
                    <div class="testimonial__rating d-flex align-items-center">
                      <div class="mr-20">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <strong class="color-primary">Perfect Choice!!</strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc">They were fantastic through the entire purchase process. I had lots of
                      questions and they were patient. My system arrived it was well packed and shipping with xpo.
                    </h4>
                    <div class="testimonial__meta">
                      <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                      <p class="testimonial__meta-desc">Digital Media Manager</p>
                    </div><!-- /.testimonial-meta -->
                  </div>
                </div><!-- /. testimonial-item -->
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