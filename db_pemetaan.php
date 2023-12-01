<?php
    session_start();
?>

<!DOCTYPE html>
<?php

  //print_r($_POST);

// sambungin ke database
include "h00_konfigKoneksiProduk.php"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



//buat kirim ke db
//echo "<p>";

   $pemilik = $_SESSION["nama_lengkap"];
    
  // Handle image upload
    $targetDirectory = "images/"; // Specify the directory where images will be stored
    //$targetFile = $targetDirectory . basename($_FILES["foto_produk"]["name"]);
    $namefile = str_replace(' ', '_', $_FILES["foto_thumbnail"]["name"]);
    $targetFile = $targetDirectory . str_replace(' ', '_', $_FILES["foto_thumbnail"]["name"]); // Replace spaces with underscores
    
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Handle PDF file upload
    $targetPdfDirectory = "pdfs/";
    $targetPdfFile = $targetPdfDirectory . str_replace(' ', '_', $_FILES["surat_pernyataan"]["name"]);

    $uploadOk = 1;
    
// PDF file upload handling
    if (move_uploaded_file($_FILES["surat_pernyataan"]["tmp_name"], $targetPdfFile)) {
        echo "The PDF file " . basename($_FILES["surat_pernyataan"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading the PDF file.";
    }

    // Check if image file is a valid image
    $check = getimagesize($_FILES["foto_thumbnail"]["tmp_name"]);
    if ($check !== false) {
        // File is a valid image
        $uploadOk = 1;
    } else {
        echo "File is not a valid image.";
        $uploadOk = 0;
    }

    // Check if file already exists (you can modify this check as needed)
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists."; 
        $uploadOk = 0;
    }

    // Check file size (adjust as needed)
    if ($_FILES["foto_thumbnail"]["size"] > 50000000) {
        echo "Sorry, the file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (you can customize this list)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload the file
        if (move_uploaded_file($_FILES["foto_thumbnail"]["tmp_name"], $targetFile)) {
            // Image uploaded successfully, insert data into the database
            // Include database insert code here

            echo "The file " . basename($_FILES["foto_thumbnail"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    
// Insert data into the database\

// Modify to insert full name into the "username" column
$sql = "INSERT INTO tb_pemetaan (pemilik, kategori_partner, deskripsi, no_telpon, nama_toko, jam_operasional, lokasi, surat_pernyataan,posisi_lokasi, foto_thumbnail)
values(?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $pemilik, $_POST["kategori_partner"], $_POST["deskripsi"], $_POST["no_telpon"], $_POST["nama_toko"], $_POST["jam_operasional"], $_POST["lokasi"], $targetPdfFile, $_POST["posisi_lokasi"], $namefile);
if ($stmt->execute()) {
    // Data has been inserted successfully
    // Continue with image upload handling
    header("Location: list_tilok.php");
    exit; // Make sure to exit to prevent further execution
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();

                                                    

?>
