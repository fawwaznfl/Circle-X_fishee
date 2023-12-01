<?php
session_start();
include "db_conn-ulasan.php";

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Tangkap username dari sesi
$username = $_SESSION['username'];

// Hapus data profil partner dengan prepared statement untuk menghindari SQL injection
$query = "DELETE FROM login WHERE username=?";
$stmt = mysqli_prepare($conn, $query);

// Bind parameter
mysqli_stmt_bind_param($stmt, "s", $username);

// Eksekusi query
$result = mysqli_stmt_execute($stmt);

if ($result) {
    // Jika query berhasil dijalankan, hancurkan sesi
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
} else {
    // Tampilkan pesan error yang lebih bermakna
    echo mysqli_error($conn);
}
?>