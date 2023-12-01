
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

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>
 
 <!-- style CSS CONTAINER -->
 <style>

.google-map {
     padding-bottom: 50%;
     position: relative;
}

.google-map iframe {
     height: 100%;
     width: 100%;
     left: 0;
     top: 0;
     position: absolute;
}
</style>

<body>

    <!-- Begin page -->
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
                            <span class="d-none d-sm-inline-block ml-1">Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Profil</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Logout</span>
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

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-file"></i><span>Data Partner</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="lihat-data-partner.php">Lihat Data Partner</a></li>
                                <li><a href="tambah-data-partner.php">Tambah Partner</a></li>                                
                            </ul>
                        </li>

                        <li><a href="membatasi-pengunjung.php" class=" waves-effect"><i class="bx bxs-user-x"></i><span>Membatasi Akses Pengunjung </span></a></li>
						<li><a href="membatasi-partner.php" class=" waves-effect"><i class="bx bxs-user-x"></i><span>Membatasi Akses Partner </span></a></li>

                        

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-map-pin"></i><span>Pemetaan</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="data-pemetaan.php">Lihat Data Pemetaan</a></li>
                            
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-user-detail"></i><span>Pengunjung</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="data-pengunjung.php">Lihat Data Pengunjung</a></li>
                                <li><a href="rating.php">Penilaian</a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <!--<a href="javascript: void(0);" class="waves-effect"><i class="bx bxs-eraser"></i><span class="badge badge-pill badge-danger float-right">6</span><span>Forms</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="forms-elements.php">Elements</a></li>
                                <li><a href="forms-plugins.php">Plugins</a></li>
                                <li><a href="forms-validation.php">Validation</a></li>
                                <li><a href="forms-mask.php">Masks</a></li>
                                <li><a href="forms-quilljs.php">Quilljs</a></li>
                                <li><a href="forms-uploads.php">File Uploads</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-aperture"></i><span>Icons</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-boxicons.php">Boxicons</a></li>
                                <li><a href="icons-materialdesign.php">Material Design</a></li>
                                <li><a href="icons-fontawesome.php">Font awesome 5</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">More</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-map-alt"></i><span>Maps</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.php">Google Maps</a></li>
                                <li><a href="maps-vector.php">Vector Maps</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-share-alt"></i><span>Multi Level</span></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);">Level 2.2</a></li>
                                    </ul>-->
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
                                <h4 class="text-muted text-uppercase mt-0"><a href="dashboard-vendor.php">Dasbor</a>/ Tambah Partner </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
									<li class="breadcrumb-item"><a href="membatasi-pengunjung.php" class=" waves-effect"><i class="fas fa-home"></i><span> Halaman Utama</span></a></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
					<form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Kategori Partner</label>
                                <select name="id_user" class="form-control select2">
                                    <option value="">-- Pilih Partner --</option>
                                                                        <option value="11">Olahan Ikan</option>
                                                                        <option value="12">Ikan Segar</option>
                                                                        
                                                                    </select>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Partner</label>
                                <input class="form-control" type="text" name="nama_umkmjasa" value="">
                                <small class="text-danger"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Jam Operasional <small class="text-danger">(Contoh : 07.00 - 19.00)</small></label>
                                <input class="form-control" type="text" name="jam_operasional" value="">
                                <small class="text-danger"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>No Handphone/WA <small class="text-danger">(Contoh : 0852***)</small></label>
                                <input class="form-control" type="number" name="nohp_umkmjasa" value="">
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Lokasi <small class="text-danger">(Contoh : Kota Bogor)</small></label>
                                <input class="form-control" type="text" name="kota" value="">
                                <small class="text-danger"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tautan Google Maps</label>
                                <input class="form-control" type="text" name="lokasi" value="">
                                <small class="text-danger"></small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Kategori Utama Partner</label>
                                <select name="id_jeniskategori" class="form-control select2">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="1">Olahan Ikan</option>
                                    <option value="2">Ikan Segar</option>   
                                                                    </select>
                                <small class="text-danger"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Letak Lokasi</label>
									
									<!-- iframe lokasi -->
									<div class="container">			
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.33545458298!2d106.7094892304854!3d-6.59501620289987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c44a0cd6aab5%3A0x301576d14feb9a0!2sKota%20Bogor%2C%20Kp.%20Parung%20Jambu%2C%20Kota%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1695254392636!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade " width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
		</div>
								
                                <!--<div id="map" style="border-radius: 8px; width: 100%; height: 400px"></div>  -->
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="form-group">
                                <label>Posisi Lokasi <small class="text-danger">(Berdasarkan titik lokasi yang dipilih atau masukkan latitude dan longitude)</small></label>
                                <input type="text" class="form-control rounded-3" name="lat_long" id="lat_long" placeholder="Pilih posisi dari map atau masukkan latitude dan longitude">
                            </div>
                            <div class="form-group">
                                <label>Foto Thumbnail <small class="text-danger">(Format : JPG/PNG, Max. 5mb)</small></label>
                                <input class="form-control" type="file" name="userfile[]">
                                <small class="text-danger"></small>
                            </div>
                                <input type="hidden" name="jenis" value="1">
                        </div>
                    </div>
                    <button class="btn btn-sm btn-success" type="submit">Tambah</button>
                    <button class="btn btn-sm btn-danger" onclick="document.location='lihat-data-partner.php'; return false;">Batal</button>
                </form>
            </div>
        </div>
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

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>