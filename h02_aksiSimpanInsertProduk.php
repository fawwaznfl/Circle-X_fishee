<?php
    session_start();
?>

<!DOCTYPE HTML>
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

    //ECHO $_SESSION["nama_lengkap"];
    $nama_lengkap = $_SESSION["nama_lengkap"];

  // Handle image upload
    $targetDirectory = "images/"; // Specify the directory where images will be stored
    //$targetFile = $targetDirectory . basename($_FILES["foto_produk"]["name"]);
    $namefile = str_replace(' ', '_', $_FILES["foto_produk"]["name"]);
    $targetFile = $targetDirectory . str_replace(' ', '_', $_FILES["foto_produk"]["name"]); // Replace spaces with underscores
    
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $check = getimagesize($_FILES["foto_produk"]["tmp_name"]);
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
    if ($_FILES["foto_produk"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $targetFile)) {
            // Image uploaded successfully, insert data into the database
            // Include database insert code here

            echo "The file " . basename($_FILES["foto_produk"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    
// Insert data into the database\

// Modify to insert full name into the "username" column
$sql = "INSERT INTO tb_produk (id_toko, nama_Produk, username, kategori, deskripsi, harga, foto_produk) 
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssds", $_POST["id_toko"], $_POST["nama_Produk"], $nama_lengkap, $_POST["kategori"], $_POST["deskripsi"], $_POST["harga"], $namefile);
if ($stmt->execute()) {
    // Data has been inserted successfully
    // Continue with image upload handling
    // Redirect the user to the list.php page
    header("Location: list_datprod.php");
    exit; // Make sure to exit to prevent further execution
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();

                                                    

?>
