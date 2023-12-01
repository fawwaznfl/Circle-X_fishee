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

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

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

<!-- Buat hapus row -->
<script>
      function dialogHapus(urlHapus,namanya){
        if(confirm("Apakah anda yakin akan menghapus data " + namanya+" ?")){
          alert("Oke konfirmasi penghapusan diberikan");
          document.location=urlHapus;
        }
        else{
          alert("Penghapusan dibatalkan");
        }
      }
  </script>

  <!-- Buat sortir -->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

$(function() {
  $("#myTableUtama").tablesorter({ sortList: [[0,0], [1,0]] });
});
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
                                <h4 class="text-muted text-uppercase mt-0"><a href="dashboard-vendor.php">Dasbor</a>/ Data pengunjung </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php" class=" waves-effect"><i class="fas fa-home"></i><span> Halaman Utama</span></a></li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div><div class="box_general padding_bottom">
                <div class="header_box version_2"> 
                </div>

                <form action="db2xlsxfishee-login.php" method="post">
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to download ulasan?')">Download Ulasan Excel</button>
                </form>
                <br />

                <div class="table-responsive">
                <table class="table table-hover tablesorter" id="myTableUtama">
                        <thead>

                            <tr>

                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>NO HP</th>
                                <th>Peran</th>
                                <th>aksi</th>

                            </tr>
                        </thead>
                        <tbody id="myTable">

                        <?php
								// Buat nyambungin ke database
								include "h00_konfigKoneksiProduk.php";

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								}

								//$sql = "SELECT * FROM tb_produk" ;
                                $sql = "SELECT * FROM login WHERE usertype='user'";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
								// output data of each row
								$nomor = 1;
								while($row = $result->fetch_assoc()) {
									//echo "row: " . $row["id"]. "-" . $row["nim"]. "-" . $row["nama"]."-". $row["prodi"]."-". $row["kelamin"]."<br>";
									echo "<tr>
											<td>$nomor</td>
                                            <td>". $row["nama_lengkap"]."</td>
                                            <td>". $row["username"]."</td>
                                            
											<td>". $row["no_telp"]." </td>
                                            <td>". $row["usertype"]."</td>
                                            
											<td>                                                
                                                <a href=\"javascript:dialogHapus('hapus_data_pengunjung.php?id=".$row["id"]."','".$row["nama_lengkap"]."')\" class=\"btn_1 gray\">Hapus</a>
                                            </td>
											
										 </tr>";
									$nomor++;    
								}
								} else {
								echo "0 results";
								}
								//close setelah beres
								$conn->close();
								
						?>
                        <!-- <tbody>
                            <tr>
                                <td>1</td>
                                <td>Partner</td>
                                <td>Ps Baru</td>
                                <td>Ikan Segar</td>
                                <td>Lorem Ipsum &#8230;</td>
                                <td>05.30-22.00 WIB</td>
                                <td>0218875072</td>
                                <td><a href="https://goo.gl/maps/o3NfAjE5Q3WnBzr87">Lihat Lokasi</a></td>
                                <td>
                                    <a href="assets/images/gurame-segar.jpg" target="_blank"><img src="assets/images/gurame-segar.jpg" alt="Thumbnail" class="img-fluid" width="50%" height="50%"></a>
                                </td>
                                <td>-6.18233223838753, 106.99080273437347</td>
                                <td>
                                    <a href="update_tilok.php" class="btn_1">Edit</a><br>
                                    <a href="#" class="btn_1 gray" id="btn-hapus">Hapus</a>
                                </td>
                            </tr>
                
                        </tbody> -->
                    </table>

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
 

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>