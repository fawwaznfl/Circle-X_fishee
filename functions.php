<?php

// connect ke database
$conn = mysqli_connect("localhost","root","","fishee");

// bikin function registrasi
function registrasi ($data) {
    global $conn;

    $username  = strtolower(stripslashes($data["username"]));
    $password  = mysqli_real_escape_string($conn, $data["password"]);
    $usertype  = strtolower(stripslashes($data["usertype"]));
    $nama_lengkap  = strtolower(stripslashes($data["nama_lengkap"]));
    $no_telp  = strtolower(stripslashes($data["no_telp"]));


    //cek username udah ada atau belum
    $result = mysqli_query ($conn, "SELECT username FROM login
             WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('username telah terdaftar')
            </script>";

            return false;
        
        }

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO login VALUES('','$username', '$password','$usertype','$nama_lengkap','$no_telp')");

    return mysqli_affected_rows($conn);
}