<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Fishee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo-profil.png">

     <!--calendar css-->
     <link href="../plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

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
                                <span class="d-none d-sm-inline-block ml-1"><?php echo $_SESSION["nama_lengkap"]?></span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
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
                    <a href="dashboard-vendor.php" class="logo">
                        <img src="assets/images/Fishee-white.png" />
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="dashboard-vendor.php" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>Dashboard</span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-file"></i><span>Data Partner</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="lihat-data-partner.php">Lihat Data Partner</a></li>
                                <li><a href="tambah-data-partner.php">Tambah Partner</a></li>                                 
                            </ul>
                        </li>

                        <li><a href="membatasi-pengunjung.php" class=" waves-effect"><i class="bx bxs-user-x"></i><span>Membatasi Akses Pengunjung </span></a></li>

                        <li>
                            <a href="membatasi-partner.php" class="waves-effect"><i class='bx bxs-user-x'></i><span>Membatasi Akses Partner</span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-table"></i><span>Pemetaan</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="data-pemetaan.php">Lihat Data Pemetaan</a></li>
                               
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-doughnut-chart"></i><span>Pengunjung</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="data-pengunjung.php">Lihat Data Pengunjung</a></li>
                                <li><a href="rating.php">Penilaian</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            
                                </li>
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
                                <h4 class="mb-0 font-size-18">Profil </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="membatasi-pengunjung.php" class=" waves-effect"><i class="fas fa-home"></i><span> Halaman Utama</span></a></li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div><div class="box_general padding_bottom">
                           
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input class="form-control" type="text" name="nama_lengkap" value="<?php echo $_SESSION["nama_lengkap"]?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="username" value="<?php echo $_SESSION["username"]?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input class="form-control" type="text" name="no_telp" value="<?php echo $_SESSION["no_telp"]?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input class="form-control" type="text" name="usertype" value="<?php echo $_SESSION["usertype"]?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- <button class="btn btn-sm btn-success" type="submit">Tambah</button> -->
                        </form>
                    </div>
									
                                    <!-- end row -->
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row --> 
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2023 © Fishee.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Didesain dan dikembangkan oleh tim Circle X
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

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

     <!--calendar js-->
     <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
     <script src="../plugins/moment/moment.js"></script>
     <script src='../plugins/fullcalendar/js/fullcalendar.min.js'></script>
     <script src="assets/pages/calendar-demo.js"></script>
 

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>