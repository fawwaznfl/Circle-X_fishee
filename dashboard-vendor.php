<?php 

$conn = mysqli_connect("localhost", "root", "", "fishee");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start(); 
if (!isset($_SESSION["usertype"]))
{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Fishee - Dasbor Admin</title>
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

    <script type="text/javascript" src="assets/fusion-chart/fusioncharts.js"></script>
    <script type="text/javascript" src="assets/fusion-chart//themes/fusioncharts.theme.fint.js"></script>
    <script>
        FusionCharts.ready(function () {
            // Fetch data from dbGrafik.php using AJAX
            fetch('dbGrafik.php')
                .then(response => response.json())
                .then(data => {
                    // Use the fetched data to render FusionCharts
                    var grafik_O = new FusionCharts({
                        "type": "column2d",
                        "renderAt": "lokasi_O",
                        "width": "500",
                        "height": "400",
                        "dataFormat": "json",
                        "dataSource": data.O
                    });

                    var grafik_S = new FusionCharts({
                        "type": "column2d",
                        "renderAt": "lokasi_S",
                        "width": "500",
                        "height": "400",
                        "dataFormat": "json",
                        "dataSource": data.S
                    });

                    grafik_O.render();
                    grafik_S.render();
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    </script>

</head>

<style>

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
                                <span class="d-none d-sm-inline-block ml-1"><?php echo $_SESSION["nama_lengkap"]?></span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="profile.php">
                                <span>Profil</span>
                            </a> -->
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
                    <a href="dashboard-user.php" class="logo">
                        <img src="assets/images/Fishee-white.png"/>
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
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-map-pin"></i><span>Pemetaan</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="data-pemetaan.php">Lihat Data Pemetaan</a></li>                                
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-user-detail"></i><span>Pengunjung</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="data-pengunjung.php">Lihat Data Pengunjung </a></li>                                
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
                                <h4 class="mb-0 font-size-18">Selamat datang, Admin!</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">                                        
										<li class="breadcrumb-item"><a href="index.php" class=" waves-effect"><i class="fas fa-home"></i><span> Halaman Utama</span></a></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-star float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0"><a href="rating.php">Penilaian</a></h6>
                                    <!--<h3 class="mb-3" data-plugin="counterup">1,587</h3>         -->
                                    <?php
                                    $dash_rate_query = "SELECT * from ratee";
                                    $dash_rate_query_run = mysqli_query($conn, $dash_rate_query);

                                    if($rate_total = mysqli_num_rows($dash_rate_query_run))
                                    {
                                        echo '<h3 class="mb-3">' .$rate_total.' </h3>';
                                    }else{
                                        echo '<h3 class="mb-3"> No Data </3>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-fish float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0"><a href="lihat-data-partner.php">Ikan Segar</a></h6>
                                    <!-- <h3 class="mb-3"><span data-plugin="counterup">1.289</span></h3>   -->
                                    <?php
                                    $dash_ikn_sgr_query = "SELECT * from tb_pemetaan WHERE kategori_partner='S'";
                                    $dash_ikn_sgr_query_run = mysqli_query($conn, $dash_ikn_sgr_query);

                                    if($rate_total = mysqli_num_rows($dash_ikn_sgr_query_run))
                                    {
                                        echo '<h3 class="mb-3">' .$rate_total.' </h3>';
                                    }else{
                                        echo '<h3 class="mb-3"> No Data </3>';
                                    }
                                    ?>                                 
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-utensils float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0"><a href="lihat-data-partner.php">Olahan Ikan</a></h6>
                                    <?php
                                    $dash_olh_ikn_query = "SELECT * from tb_pemetaan WHERE kategori_partner='O'";
                                    $dash_olh_ikn_query_run = mysqli_query($conn, $dash_olh_ikn_query);

                                    if($rate_total = mysqli_num_rows($dash_olh_ikn_query_run))
                                    {
                                        echo '<h3 class="mb-3">' .$rate_total.' </h3>';
                                    }else{
                                        echo '<h3 class="mb-3"> No Data </3>';
                                    }
                                    ?>                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-users float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0"><a href="data-pengunjung.php">Pengunjung</a></h6>
                                    <?php
                                    $dash_pengunjung_query = "SELECT * from login WHERE usertype='user'";
                                    $dash_pengunjung_query_run = mysqli_query($conn, $dash_pengunjung_query);

                                    if($rate_total = mysqli_num_rows($dash_pengunjung_query_run))
                                    {
                                        echo '<h3 class="mb-3">' .$rate_total.' </h3>';
                                    }else{
                                        echo '<h3 class="mb-3"> No Data </3>';
                                    }
                                    ?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card">
                            <div id="lokasi_O">nanti chart di sini</div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                            <div id="lokasi_S">nanti chart di sini</div>      
                                </div>
                            </div>
                        </div> <!-- end col -->         
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->               

                                   

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        

                                    

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>

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

            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
        
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>                        
                            
                            <button type="button" class="btn btn-outline-success waves-effect waves-light">
                            
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Anda akan keluar dari aplikasi!</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-success waves-effect waves-light">Cancel</button>                            
                            <a class="btn btn-outline-success waves-effect waves-light" href="#">Yakin</a>
                        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="assets/plugins/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js
    <script src="assets/pages/dashboard-demo.js"></script>
    -->

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

<!-- Morris Charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>
    // Calculate percentages based on the number of accesses
    var totalAccesses = <?php echo $olahanikan_count + $ikansegar_count; ?>;
    var ikanSegarPercentage = totalAccesses > 0 ? (<?php echo $ikansegar_count; ?> / totalAccesses) * 100 : 0;
    var olahanIkanPercentage = totalAccesses > 0 ? (<?php echo $olahanikan_count; ?> / totalAccesses) * 100 : 0;

    // Sample data for the Morris Donut Chart
    var donutData = [
        { label: 'Ikan Segar', value: <?php echo $ikansegar_count; ?> },
        { label: 'Olahan Ikan', value: <?php echo $olahanikan_count; ?> }
    ];

    // Initialize Morris Donut Chart
    Morris.Donut({
        element: 'morris-donut-example',
        data: donutData,
        colors: ['#007dab', '#e9ecef'],
        resize: true
    });

    // Sample data for the Morris Bar Chart
    var barData = [
        { y: 'Ikan Segar', a: ikanSegarPercentage },
        { y: 'Olahan Ikan', a: olahanIkanPercentage }
    ];

    // Initialize Morris Bar Chart
    Morris.Bar({
        element: 'morris-bar-example',
        data: barData,
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Percentage'],
        barColors: ['#007dab'],
        resize: true
    });

    // Sample data for the Morris Line Chart
    var lineData = [
        { y: 'Ikan Segar', a: ikanSegarPercentage },
        { y: 'Olahan Ikan', a: olahanIkanPercentage }
    ];

    // Initialize Morris Line Chart
    Morris.Line({
        element: 'morris-line-example',
        data: lineData,
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Percentage'],
        lineColors: ['#007dab'],
        resize: true
    });
</script>

<script>
    function confirmDelete() {
        if (confirm("Apakah Anda yakin ingin menghapus akun?")) {
            window.location.href = "hapus_akun_user_partner.php";
        }
    }
</script>

</body>

</html>