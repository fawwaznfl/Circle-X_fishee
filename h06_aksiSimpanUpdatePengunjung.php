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




// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $id = $_POST["id"];
//     $kategori_partner = $_POST["kategori_partner"];
//     $nama_partner = $_POST["nama_partner"];
//     $deskripsi = $_POST["deskripsi"];
//     $jam_operasional = $_POST["jam_operasional"];
//     $no_telpon = $_POST["no_telpon"];
//     $lokasi = $_POST["lokasi"];
//     $tautan_googlemaps = $_POST["tautan_googlemaps"];
//     $posisi_lokasi = $_POST["posisi_lokasi"];
//     $foto_thumbnail = '';

//     if (isset($_FILES["foto_thumbnail"]) && $_FILES["foto_thumbnail"]["error"] == 0) {
//         $targetDirectory = "images/";
//         $originalFileName = str_replace(' ', '_', $_FILES["foto_thumbnail"]["name"]);
//         $targetFile = $targetDirectory . str_replace(' ', '_', $_FILES["foto_thumbnail"]["name"]); // Replace spaces with underscores
//         $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//         if (file_exists($targetFile)) {
//             unlink($targetFile); // Delete the previous image
//         }

//         if (move_uploaded_file($_FILES["foto_thumbnail"]["tmp_name"], $targetFile)) {
//             if (exif_imagetype($targetFile)) {
//                 $foto_thumbnail = $originalFileName;
//                 echo "The file " . $originalFileName . " has been uploaded.";
//             } else {
//                 unlink($targetFile); // Remove the invalid file
//                 echo "File is not a valid image.";
//             }
//         } else {
//             echo "Sorry, there was an error uploading your file.";
//         }
//     }
//     // ECHO $_SESSION["nama_lengkap"];
//     $nama_lengkap = $_SESSION["nama_lengkap"];

    $sql = "UPDATE login
            SET nama_lengkap = ?,
                username = ?,
                no_telp = ?,
                usertype = ?,

            WHERE id = ?";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssdssssi", $nama_lengkap, $username, $no_telpon, $usertype, $id);


        if ($stmt->execute()) {
            echo "Record updated successfully";
            header("Location: list_tilok.php");
            exit; // Make sure to exit to prevent further execution
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    mysqli_close($conn);
//};
?>

