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
                                href="profile.php">
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
                            <a href="dashboard-vendor.php" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>Dasbor</span></a>
                        </li>

                        <li><a href="lihat-data-partner.php" class=" waves-effect"><i class="bx bxs-file"></i><span>Data Partner</span></a></li>
                        
                        <li><a href="membatasi-pengunjung.php" class=" waves-effect"><i class="bx bxs-user-x"></i><span>Menghapus ulasan Pengunjung</span></a></li>

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
                                <h4 class="text-muted text-uppercase mt-0"><a href="dashboard-vendor.php">Dasbor</a>/ Penilaian </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="membatasi-pengunjung.php" class=" waves-effect"><i class="fas fa-home"></i><span> Halaman Utama</span></a></li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div><div class="box_general padding_bottom">
                <div class="header_box version_2"> 
                </div>
            </ol>            
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Penilai</th>
                                <th>Nama Partner</th>
                                <th>Penilaian (1-5)</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                                <td>1</td>
                                <td>Pengunjung</td>
                                <td>Qiana Fish </td>
                                <td>9</td>
                                <td>
                                                                        <i class="pending">Ditinjau</i>
                                                                    </td>
                                <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Ubah</button><br> <br>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Hapus</button><br>
                                                                    </td>
                            </tr>
                                                        <tr>
                                <td>2</td>
                                <td>Pengunjung</td>
                                <td>Jual ikan murah</td>
                                <td>10</td>
                                <td>
                                                                        <i class="pending">Ditinjau</i>
                                                                    </td>
                                <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Ubah</button><br> <br>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Hapus</button><br>
                                                                    </td>
                            </tr>
                                                        <tr>
                                <td>3</td>
                                <td>Pengunjung</td>
                                <td>Ikan Segar Depok</td>
                                <td>8</td>
                                <td>
                                                                        <i class="approved">Diterima</i>
                                                                    </td>
                                <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Ubah</button><br> <br>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Hapus</button><br>
                                                                    </td>
                            </tr>
                                                        <tr>
                                <td>4</td>
                                <td>Pengunjung</td>
                                <td>eggar seefood</td>
                                <td>7</td>
                                <td>
                                                                        <i class="approved">Diterima</i>
                                                                    </td>
                                <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Ubah</button><br> <br>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Hapus</button><br>
                                                                    </td>
                            </tr>
                                                        <tr>
                                <td>5</td>
                                <td>Pengunjung</td>
                                <td>yanti resto seefod</td>
                                <td>7</td>
                                <td>
                                                                        <i class="approved">Diterima</i>
                                                                    </td>
                                <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Ubah</button><br> <br>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Hapus</button><br>
                                                                    </td>
                            </tr>
                                                        <tr>
                                <td>6</td>
                                <td>Rifda Putri</td>
                                <td>ratna sari tempat makan seefood</td>
                                <td>8</td>
                                <td>
                                                                        <i class="approved">Diterima</i>
                                                                    </td>
                                <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Ubah</button><br> <br>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Hapus</button><br>
                                                                    </td>
                            </tr>
                                                        <tr>
                                <td>7</td>
                                <td>Vimel rafifa qonita</td>
                                <td>seefod 889</td>
                                <td>10</td>
                                <td>
                                                                        <i class="pending">Ditinjau</i>
                                                                    </td>
                                <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Ubah</button><br> <br>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Hapus</button><br>
                                                                    </td>
                            </tr>
                                                        <tr>
                                <td>8</td>
                                <td>Komang Genta Ayu Saraswati</td>
                                <td>seefood balaraja</td>
                                <td>10</td>
                                <td>
                                                                        <i class="pending">Ditinjau</i>
                                                                    </td>
                                <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Ubah</button><br> <br>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Hapus</button><br>
                                                                    </td>
                            </tr>
                                                        <tr>
                                <td>9</td>
                                <td>pawas </td>
                                <td>food court seefood surken</td>
                                <td>8</td>
                                <td>
                                                                        <i class="approved">Diterima</i>
                                                                    </td>
                                <td>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Ubah</button><br> <br>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">Hapus</button><br>
                                                                    </td>
                            </tr>
                                                        
                                                                    </td>
                            
                                                    </tbody>
                    </table>
                </div>
            </div>
        </div>
									
                                    <!-- end row -->
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                </div> <!-- container-fluid -->
            </div>
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