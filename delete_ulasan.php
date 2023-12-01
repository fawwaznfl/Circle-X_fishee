<?php
include "db_conn-ulasan.php";
if (isset($_GET['id'])) {
    $idToDelete = $_GET['id'];
    
    // Membuat koneksi ke database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Memeriksa koneksi database
    if (!$conn) {
        die("Gagal terhubung MySQL: " . mysqli_connect_error());
    }

    // Menghindari SQL Injection
    $idToDelete = mysqli_real_escape_string($conn, $idToDelete);

    // Query SQL DELETE
    $sql = "DELETE FROM ratee WHERE id = $idToDelete";

    // Menjalankan query DELETE
    if (mysqli_query($conn, $sql)) {
        // echo "Data berhasil dihapus.";
        Header ("Location:membatasi-pengunjung.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Menutup koneksi ke database
    mysqli_close($conn);
}

?>
