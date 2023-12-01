<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <link href="assets_guests/images/favicon/logo-profil.png" rel="icon">
    <title>Update Titik Lokasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo-profil.png">

    <!-- leaflet  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
      integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
      crossorigin=""></script>

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

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

    <?php

    //buat sambungin ke db nya 
    //print_r($_GET);
    include "h00_konfigKoneksiProduk.php";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM tb_pemetaan WHERE id='".$_GET["id"]."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc()

    ?>

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
                                href="akun.php">
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
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-map-pin"></i><span>Pemetaan</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="data-pemetaan.php">Lihat Data Pemetaan</a></li>
                    
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-user-detail"></i><span>Pengunjung</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="data-pengunjung.php">Lihat Data Pengunjung</a></li>                                
                </ul>
            </li>

            <li>
                
                        </ul>
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
                                <h4 class="mb-0 font-size-18">Mengupdate Titik Lokasi</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">Titik Lokasi</li>
                                        <li class="breadcrumb-item active">Update Titik Lokasi</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="box_general padding_bottom">
                        <div class="header_box version_2">
                            <h6>Edit Data UMKM</h6>
                        </div>
                        <form action="h07_aksiSimpanUpdateTilokAdmin.php" method="post" enctype="multipart/form-data">
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
                                        <label>nama toko</label>
                                        <input type="text" class="form-control" id="nama_toko" placeholder="nama toko anda..." name="nama_toko" value="<?php echo $row["nama_toko"]; ?>">
                                        <?php 
                                            
                                            function aksingeselect($x, $match){
                                                if ($x==$match)
                                                    { echo "selected";}
                                            }

                                            function aksingecheck($x, $match){
                                                if ($x==$match)
                                                { echo "checked";}
                                            }

                                            //ksingeceklis("ABC","ABC"); 
                                            //echo $row["prodi"];         
                                            //aksingeceklis($row["prodi"],"PVT");  
                                            
                                        ?>
                                        
                                        <small class="text-danger"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        
                                        <textarea class="form-control" name="deskripsi" ><?php echo $row["deskripsi"]; ?></textarea>
                                        <small class="text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jam Operasional <small class="text-danger">(Contoh : 07.00 - 19.00)</small></label>
                                        <input type="text" class="form-control" id="jam_operasional" placeholder="jam_operasional anda..." name="jam_operasional" value="<?php echo $row["jam_operasional"]; ?>">
                                        
                                        <small class="text-danger"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No Telepon/WA <small class="text-danger">(Contoh : 62852***)</small></label>
                                        <input class="form-control" type="number" name="no_telpon" value=<?php echo $row["no_telpon"]; ?>>
                                        <small class="text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Lokasi <small class="text-danger">(Contoh : Kota Bogor)</small></label>
                                    <input class="form-control" type="text" name="lokasi" value=<?php echo $row["lokasi"]; ?>>
                                    <small class="text-danger"></small>
                                </div>
                            </div>
                            </div>
                            <div class="row">

                            <div id="map"></div>

                            <script>
document.addEventListener('DOMContentLoaded', function () {
    var posisiLokasi = document.getElementById("lat_long").value.split(',');

    // Ensure both lat and long are available, otherwise set default values
    var defaultLocation = [-6.2088, 106.8456]; // Default location if retrieval fails
    var mapCenter = [
        parseFloat(posisiLokasi[0]) || defaultLocation[0],
        parseFloat(posisiLokasi[1]) || defaultLocation[1]
    ];

    var map = L.map('map').setView(mapCenter, 13);

    var basemap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: ''
    });
    basemap.addTo(map);

    var marker = L.marker(mapCenter, { draggable: true }).addTo(map);

    // Event handler for successful location retrieval
    function onLocationFound(e) {
        // Set the map view to the user's location
        map.setView(e.latlng, 16);

        // Update the marker position
        marker.setLatLng(e.latlng);

        // Update the input field with latitude and longitude
        document.getElementById('lat_long').value = e.latlng.lat + ', ' + e.latlng.lng;
    }

    // Event handler for location error
    function onLocationError(e) {
        console.log(e.message);
        // Fallback to a default location if user's location cannot be retrieved
        map.setView(mapCenter, 10);
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
                                    <label for="pdf_file">Surat Pernyataan: <small class="text-danger">Upload dalam bentuk pdf</small> <br><a href="surat-pernyataan/surat-pernyataan.docx">Unduh Surat disini </a> </label> <br>
                                    <input type="file" name="surat_pernyataan" id="surat_pernyataan" value=<?php echo $row["surat_pernyataan"]; ?> accept=".pdf">
                                </div>

                                    <div class="form-group">
                                        <label>Posisi Lokasi <small class="text-danger">(Berdasarkan titik lokasi yang dipilih atau masukkan latitude dan longitude)</small></label>
                                        <input type="text" class="form-control rounded-3" name="posisi_lokasi" id="lat_long" placeholder="Pilih posisi dari map atau masukkan latitude dan longitude" value=<?php echo $row["posisi_lokasi"]; ?>>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Thumbnail 
                                            <small class="text-danger">(Format : JPG/PNG, Max. 5mb)</small></label>
                                            <input type="file" class="form-control" id="foto_thumbnail" name="foto_thumbnail">
                                        <small class="text-danger"></small>
                                    </div>
                                    <input type="hidden" name="jenis" value="1">
                                    
                                </div>

                                </div>
                                <!-- buat bagian id produk nya nanti pas update -->
                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                            <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                            <button class="btn btn-sm btn-danger" onclick="document.location='lihat-data-partner.php'; return false;">Batal</button>
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





