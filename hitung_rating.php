<?php
include "db_conn-ulasan.php";
// $servername = "localhost";  // Nama Server
// $username = "root";         // Nama Pengguna Database
// $password = "";             // Kata Sandi Database (kosongkan jika tidak ada)
// $dbname = "ulasan";         // Nama Database

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi database
if (!$conn) {
    die("Gagal terhubung MySQL: " . mysqli_connect_error());
}

// Query SQL untuk menghitung total rate dan rata-rata rate
$sql = "SELECT SUM(rate) AS total_rate, COUNT(*) AS total_count, SUM(rate) / COUNT(*) AS average_rate FROM ratee";

// Menjalankan query
$query = mysqli_query($conn, $sql);

if ($query) {
    $row = mysqli_fetch_assoc($query);
    $total_rate = $row["total_rate"];
    $total_count = $row["total_count"];
    $average_rate = $row["average_rate"];
    // echo "Total Rate: $total_rate<br>";
    // echo "Total Count: $total_count<br>";
    // echo number_format($average_rate, 1);
    $_SESSION['rataan'] = $average_rate;
} else {
    die("SQL Error: " . mysqli_error($conn));
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
