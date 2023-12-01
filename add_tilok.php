<?php
session_start();
?>



<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <title>Menambah Titik Lokasi</title>
    <link href="assets_guests/images/favicon/logo-profil.png" rel="icon">
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

    <!-- leaflet  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
      integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
      crossorigin=""></script>

</head>

<style>

    #map {
        width: 50%;
        height: 300px;
        display: block;
        margin-bottom: 20px;
    }

    .leaflet-popup-content {
    width: 200px; /* Set the desired width */
    height: auto; /* Set the desired height, or 'auto' for automatic height based on content */
}
    
    </style>
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
                            <span class="d-none d-sm-inline-block ml-1"><?php echo $_SESSION["nama_lengkap"]?></span>
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
                                <h4 class="mb-0 font-size-18">Menambahkan Titik Lokasi</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="list_tilok.php">Titik Lokasi</a></li>
                                        <li class="breadcrumb-item active">Menambah Titik Lokasi</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    
                    <form action="db_pemetaan.php" method="post" enctype="multipart/form-data">
                        <div class="row">


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Kategori partner</label>
                                    
                                    <select name="kategori_partner" class="form-control select2">
                                   
                                        <optgroup label="Pilih Kategori">
                                            
                                            <option value="O" > Olahan Ikan
                                            <option value="S" > Ikan Segar
                                        </optgroup>
                                    </select>
                                    <small class="text-danger"></small>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Toko/Partner</label>
                                    <input class="form-control" type="text" name="nama_toko" id="nama_toko" placeholder="masukan nama anda"  required>
                                    <small class="text-danger"></small>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="masukan deskripsi"  required></textarea>
                                    <small class="text-danger"></small>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Jam Operasional <small class="text-danger">(Contoh : 07.00 - 19.00)</small></label>
                                    <input class="form-control" type="text" name="jam_operasional" required>
                                    <small class="text-danger"></small>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>No Telepon/WA <small class="text-danger">(Contoh : 0852***)</small></label>
                                    <input class="form-control" type="number" name="no_telpon" required>
                                    <small class="text-danger"></small>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Lokasi <small class="text-danger">(Contoh : Kota Bogor)</small></label>
                                    <input class="form-control" type="text" name="lokasi" required>
                                    <small class="text-danger"></small>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                        <div id="map"></div>

                        <script>
    document.addEventListener('DOMContentLoaded', function () {
    var map = L.map('map');
    var marker;

    // Try to get the user's current location
    map.locate({ setView: true, maxZoom: 16 });

    // Event handler for successful location retrieval
    function onLocationFound(e) {
        // Set the map view to the user's location
        map.setView(e.latlng, 16);

        // Add a marker at the user's location
        marker = L.marker(e.latlng, { draggable: true }).addTo(map);

        // Update the input field with latitude and longitude
        document.getElementById('lat_long').value = e.latlng.lat + ', ' + e.latlng.lng;

        // Update marker position when dragged
        marker.on('dragend', function () {
            var newLatLng = marker.getLatLng();
            document.getElementById('lat_long').value = newLatLng.lat + ', ' + newLatLng.lng;
        });
    }

    // Event handler for location error
    function onLocationError(e) {
        console.log(e.message);
        // Fallback to a default location if user's location cannot be retrieved
        map.setView([-6.2088, 106.8456], 10);
    }

    // Listen for location found and error events
    map.on('locationfound', onLocationFound);
    map.on('locationerror', onLocationError);

    // Add OpenStreetMap tiles to the map
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Listen for map click event
    map.on('click', function (e) {
        // Remove existing marker if any
        if (marker) {
            map.removeLayer(marker);
        }

        // Add a new marker at the clicked position
        marker = L.marker(e.latlng, { draggable: true }).addTo(map);

        // Update the input field with latitude and longitude
        document.getElementById('lat_long').value = e.latlng.lat + ', ' + e.latlng.lng;

        // Update marker position when dragged
        marker.on('dragend', function () {
            var newLatLng = marker.getLatLng();
            document.getElementById('lat_long').value = newLatLng.lat + ', ' + newLatLng.lng;
        });
    });
});
</script>

                            <div class="col-lg-6 mb-4">

                            <div class="form-group">
                                    <label for="pdf_file">Surat Pernyataan: <small class="text-danger">upload dalam bentuk pdf</small> <br><a href="surat-pernyataan/surat-pernyataan.docx">Unduh Surat disini</a> </label> <br>
                                    <input type="file" name="surat_pernyataan" id="surat_pernyataan" accept=".pdf">
                                </div>

                                <div class="form-group">
                                    <label>Posisi Lokasi <small class="text-danger">(Berdasarkan titik lokasi yang dipilih atau masukkan latitude dan longitude)</small></label>
                                    <input type="text" class="form-control rounded-3" name="posisi_lokasi" id="lat_long" placeholder="Pilih posisi dari map atau masukkan latitude dan longitude" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto Thumbnail <small class="text-danger">(Format : JPG/PNG, Max. 5mb)</small></label>
                                    <input class="form-control" type="file" name="foto_thumbnail" accept=".jpeg, .png, .jpg" required>
                                    <small class="text-danger"></small>
                                </div>
                                <input type="hidden" name="jenis" value="1">
                            </div>

                        </div>
                        <button class="btn btn-sm btn-success" type="submit">Tambah</button>
                        <button class="btn btn-sm btn-danger" onclick="document.location='list_tilok.php'; return false;">Batal</button>
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