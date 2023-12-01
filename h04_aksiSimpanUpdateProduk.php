<?php
    session_start();
?>


<!DOCTYPE HTML>
<?php
include "h00_konfigKoneksiProduk.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $id_toko = $_POST["id_toko"];
    $nama_Produk = $_POST["nama_Produk"];
    $kategori = $_POST["kategori"];
    $deskripsi = $_POST["deskripsi"];
    $harga = $_POST["harga"];

    // Initialize $foto_produk without erasing the existing value
    $foto_produk = '';

    // Check if the file input is present and a new file is uploaded
    if (isset($_FILES["foto_produk"]) && $_FILES["foto_produk"]["error"] == 0 && $_FILES["foto_produk"]["size"] > 0) {
        $targetDirectory = "images/";
        $originalFileName = str_replace(' ', '_', $_FILES["foto_produk"]["name"]);
        $targetFile = $targetDirectory . str_replace(' ', '_', $_FILES["foto_produk"]["name"]); // Replace spaces with underscores
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (file_exists($targetFile)) {
            unlink($targetFile); // Delete the previous image
        }

        if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $targetFile)) {
            if (exif_imagetype($targetFile)) {
                $foto_produk = $originalFileName;
                echo "The file " . $originalFileName . " has been uploaded.";
            } else {
                unlink($targetFile); // Remove the invalid file
                echo "File is not a valid image.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    //ECHO $_SESSION["nama_lengkap"];
    $nama_lengkap = $_SESSION["nama_lengkap"];

    $sql = "UPDATE tb_produk
            SET 
                id_toko = ?,
                nama_Produk = ?,
                username=?,
                kategori = ?,
                deskripsi = ?,
                harga = ?";

    // Only include the foto_produk field in the update statement if a new file is uploaded
    if (!empty($foto_produk)) {
        $sql .= ", foto_produk = ?";
    }

    $sql .= " WHERE id = ?";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Initialize parameters array
        $params = [$id_toko, $nama_Produk, $nama_lengkap, $kategori, $deskripsi, $harga];
    
        // Include foto_produk in parameters if a new file is uploaded
        if (!empty($foto_produk)) {
            $params[] = $foto_produk;
        }
    
        $params[] = $id;
    
        // Construct the type definition string dynamically based on the number of parameters
        $types = str_repeat('s', count($params) - 1) . 'i'; // Adjusted to include 'i' for integer
    
        // Add the types string as the first element in the parameters array
        array_unshift($params, $types);
    
        // Call bind_param with the updated parameters array
        call_user_func_array([$stmt, 'bind_param'], $params);
    
        if ($stmt->execute()) {
            header("Location: list_datprod.php");
            exit; // Make sure to exit to prevent further execution
        } else {
            echo "Error updating record: " . $stmt->error;
        }
    
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    mysqli_close($conn);
}
?>