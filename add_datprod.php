<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();

    // Buat nyambungin ke database
    include "h00_konfigKoneksiProduk.php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <link href="assets_guests/images/favicon/logo-profil.png" rel="icon">
    <title>Menambah Data Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo-profil.png">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>
<script>
function confirmDelete() {
    if (confirm("Apakah Anda yakin ingin menghapus akun?")) {
        // User confirmed deletion, proceed with AJAX request
            window.location.href ="hapus_akun_user_partner.php"
            //alert('OK');
    } else {
        // User clicked Cancel, do nothing
        //alert('NO');
        return false;
    }
}
</script>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        

        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    
                </div>

                <div class="d-flex align-items-center">
                    

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1"><?php ECHO $_SESSION["nama_lengkap"];?></span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="akun.php">
                                <span>Profil</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="logout.php">
                                <span>Keluar</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="dashboard_partner.php" class="logo">
                        <img src="assets/images/Fishee-white.png" />
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="dashboard_partner.php" class="waves-effect"><i class='bx bx-home-smile'></i><!--<span class="badge badge-pill badge-primary float-right">7</span>--><span>Dasbor</span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa fa-map-marker" style="margin-left: 5px;"></i><span style="margin-left: -5px;">Titik Lokasi</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="add_tilok.php">Menambah Titik Lokasi</a></li>
                                <li><a href="list_tilok.php">List Titik Lokasi</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-box-open"></i><span>Data Produk</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="add_datprod.php">Menambah Data Produk</a></li>
                                <li><a href="list_datprod.php">List Data Produk</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="list_ulasan_partner.php" class="waves-effect"><i class='bx bx-home-smile'></i><span>Ulasan</span></a>
                        </li>
                        <li>
                            <a href="#" onclick="confirmDelete()"><i class='fa fa-trash'></i><span>Hapus Akun</span></a></a>
                        </li>


                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Menambahkan Data Produk</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="list_datprod.php">Data Produk</a></li>
                                        <li class="breadcrumb-item active">Menambah Data Produk</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- form buat insert produk, nanti dikirim ke tujuan -->

                    

                    <form action="h02_aksiSimpanInsertProduk.php" method="post" enctype="multipart/form-data">   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" class="form-control" id="nama_Produk" placeholder="Masukkan nama produk anda" name="nama_Produk" required>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Toko</label>
                                <select id="id_toko" name="id_toko" class="form-control select2" >
                                    <optgroup label="Pilih Toko">
                                        <?php
                                            $pemilik = $_SESSION["nama_lengkap"];
                                            $sql = "SELECT * FROM tb_pemetaan where pemilik = '$pemilik'";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['nama_toko'] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="">No toko found</option>';
                                            }
                                        ?>
                                    </optgroup>
                                </select>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                <select name="kategori" class="form-control select2">
                                    <optgroup label="Pilih Kategori">
                                        <option value="O">Olahan Ikan</option>
                                        <option value="S">Ikan Segar</option>
                                    </optgroup>
                                </select>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" placeholder="Deskripsikan produk anda..." name="deskripsi" required></textarea>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control" id="harga" placeholder="Masukkan harga produk anda" name="harga" required>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="foto_produk">Foto Produk:</label>
                                <input type="file" name="foto_produk" id="foto_produk" class="form-control" required>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <input type="hidden" name="jenis" value="1">
                    </div>

                    <!-- buat dikirim ke database buat aksi selanjutnya -->
                    <button type="submit" class="btn btn-sm btn-success">Simpan!</button>
                    <a href="list_datprod.php" class="btn btn-sm btn-danger">Batal</a>
                </form>
                </div>
            </div>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>
    


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- Morris Js-->
    <script src="../plugins/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="../plugins/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</html>