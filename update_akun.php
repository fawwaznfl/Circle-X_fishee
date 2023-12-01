<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <title>Update Akun</title>
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
    <link href="assets/css/button.css" rel="stylesheet" type="text/css" />

</head>

<style>
    a {
    color: #007dab;
    text-decoration: none;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    outline: none;
  }
  a:hover, a:focus {
    color: #333;
    text-decoration: none;
    outline: none;
  }
  
  a.btn_1,
  .btn_1 {
    border: none;
    color: #fff;
    background: #007dab;
    cursor: pointer;
    padding: 10px 15px;
    display: inline-block;
    outline: none;
    font-size: 13px;
    font-size: 0.8125rem;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    -ms-border-radius: 25px;
    border-radius: 25px;
    line-height: 1;
    font-weight: 500;
  }
  a.btn_1.gray,
  .btn_1.gray {
    background: #e9ecef;
    color: #868e96;
    margin-top: 10px;
  }
  a.btn_1.gray.approve:hover,
  .btn_1.gray.approve:hover {
    background: #28a745;
    color: #fff;
  }
  a.btn_1.gray.delete:hover,
  .btn_1.gray.delete:hover {
    background: #dc3545;
    color: #fff;
  }
  a.btn_1.medium,
  .btn_1.medium {
    padding: 12px 45px;
    font-size: 16px;
    font-size: 1rem;
  }
  a.btn_1:hover,
  .btn_1:hover {
    background: #007dab;
    color: #fff;
  }
  
  .btn-primary {
    background-color: #007dab;
    border-color: #007dab;
  }
  .btn-primary:hover {
    background-color: #007dab;
    border-color: #007dab;
  }

  
</style>

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
                            <span class="d-none d-sm-inline-block ml-1">Ps Baru</span>
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
                                <h4 class="mb-0 font-size-18">Profil saya</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="akun.php">Profil</a></li>
                                        <li class="breadcrumb-item active">Perbarui Profil</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="box_general padding_bottom">

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input class="form-control" type="text" name="nama_user" value="Partner" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email_user" value="Partner@gmail.com" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input class="form-control" type="number" name="nohp_user" value="91806" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input class="form-control" type="text" name="status" value="Terverifikasi" >
                                    </div>
                                </div>
                            </div>
                            <td>
                                <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                                <button class="btn btn-sm btn-danger" onclick="document.location='akun.php'; return false;">Batal</button>
                            </td>    
                            <!-- <button class="btn btn-sm btn-success" type="submit">Tambah</button> -->
                        </form>
                    </div>
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