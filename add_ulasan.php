<?php
session_start();
require 'db_conn-ulasan.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah "nama_lengkap" ada dalam $_SESSION
    $name = isset($_SESSION["nama_lengkap"]) ? $_SESSION["nama_lengkap"] : "";

    // Periksa apakah "rating" dan "ulasann" ada dalam $_POST
    $rating = isset($_POST["rating"]) ? $_POST["rating"] : "";
    $ulasann = isset($_POST["ulasann"]) ? $_POST["ulasann"] : "";

    // Periksa apakah "balasan" ada dalam $_POST dan tidak kosong
    $balasan = isset($_POST["balasan"]) && $_POST["balasan"] !== "" ? $_POST["balasan"] : "";

    $id_toko = isset($_POST["id_toko"]) ? $_POST["id_toko"] : "";

    $sql = "INSERT INTO ratee (name, rate, ulasann, balasan, id_toko) VALUES ('$name', '$rating', '$ulasann', '$balasan' , '$id_toko')";
    if (mysqli_query($conn, $sql)) {
        //var_dump ($id_toko);
        header("Location: tokopandu.php?id={$id_toko}");
        exit(); // Pastikan tidak ada output setelah header
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
