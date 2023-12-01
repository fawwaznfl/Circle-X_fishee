<?php
include "h00_konfigKoneksiProduk.php";

// Create sambungin connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//buat hapus row dari daftar produk dan db nya
echo $sql = "DELETE FROM tb_pemetaan WHERE id=".$_GET['id'];;
      

// direturn ke hal. daftar produk
if (mysqli_query($conn, $sql)) {
    header("Location:lihat-data-partner.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

//setelah beres
mysqli_close($conn);
?>