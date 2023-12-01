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
    $kategori_partner = $_POST["kategori_partner"];
    $nama_toko = $_POST["nama_toko"];
    $deskripsi = $_POST["deskripsi"];
    $jam_operasional = $_POST["jam_operasional"];
    $no_telpon = $_POST["no_telpon"];
    $lokasi = $_POST["lokasi"];
    $posisi_lokasi = $_POST["posisi_lokasi"];

    // Initialize variables for foto_thumbnail and surat_pernyataan
    $foto_thumbnail = '';
    $surat_pernyataan = '';

   // Handle foto_thumbnail
    if (isset($_FILES["foto_thumbnail"]) && $_FILES["foto_thumbnail"]["error"] == 0) {
        $targetDirectory = "images/";
        $originalFileName = str_replace(' ', '_', $_FILES["foto_thumbnail"]["name"]);
        $targetFile = $targetDirectory . str_replace(' ', '_', $_FILES["foto_thumbnail"]["name"]); // Replace spaces with underscores
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (file_exists($targetFile)) {
            unlink($targetFile);
        }

        if (move_uploaded_file($_FILES["foto_thumbnail"]["tmp_name"], $targetFile)) {
            if (exif_imagetype($targetFile)) {
                $foto_thumbnail = $originalFileName;
                echo "The file " . $originalFileName . " has been uploaded.";
            } else {
                unlink($targetFile); // Remove the invalid file
                echo "File is not a valid image.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Handle surat_pernyataan
    if (isset($_FILES["surat_pernyataan"]) && $_FILES["surat_pernyataan"]["error"] == 0) {
        $targetDirectory = "pdfs/";
        $originalFileName = str_replace(' ', '_', $_FILES["surat_pernyataan"]["name"]);
        $targetFile = $targetDirectory . str_replace(' ', '_', $_FILES["surat_pernyataan"]["name"]);
        $pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (file_exists($targetFile)) {
            unlink($targetFile);
        }

        if (move_uploaded_file($_FILES["surat_pernyataan"]["tmp_name"], $targetFile)) {
            $surat_pernyataan = $originalFileName;
            echo "File " . $originalFileName . " berhasil diunggah.";

            // Update kolom surat_pernyataan di database
            $sqlSuratPernyataan = "UPDATE tb_pemetaan SET surat_pernyataan = ? WHERE id = ?";
            $stmtSuratPernyataan = $conn->prepare($sqlSuratPernyataan);
            $stmtSuratPernyataan->bind_param("si", $surat_pernyataan, $id);

            if ($stmtSuratPernyataan->execute()) {
                echo "Surat Pernyataan berhasil diperbarui.";
            } else {
                echo "Error saat memperbarui Surat Pernyataan: " . $stmtSuratPernyataan->error;
            }

            $stmtSuratPernyataan->close();
        } else {
            echo "Maaf, ada kesalahan saat mengunggah file.";
        }
    }

    // Update the database for other fields
    $sqlUpdate = "UPDATE tb_pemetaan SET 
    kategori_partner = ?,
    nama_toko = ?,
    deskripsi = ?,
    jam_operasional = ?,
    no_telpon = ?,
    lokasi = ?,
    posisi_lokasi = ?";

    // Only include the foto_thumbnail field in the update statement if a new file is uploaded
    if (!empty($foto_thumbnail)) {
    $sqlUpdate .= ", foto_thumbnail = ?";
    }

    // Include surat_pernyataan field in the update statement if a new file is uploaded
    if (!empty($surat_pernyataan)) {
    $sqlUpdate .= ", surat_pernyataan = ?";
    }

    $sqlUpdate .= " WHERE id = ?";

    $stmtUpdate = $conn->prepare($sqlUpdate);

    if ($stmtUpdate) {
    $params = [$kategori_partner, $nama_toko, $deskripsi, $jam_operasional, $no_telpon, $lokasi, $posisi_lokasi];

    // Include foto_thumbnail in parameters if a new file is uploaded
    if (!empty($foto_thumbnail)) {
    $params[] = $foto_thumbnail;
    }

    // Include surat_pernyataan in parameters if a new file is uploaded
    if (!empty($surat_pernyataan)) {
    $params[] = $surat_pernyataan;
    }

    $params[] = $id;

    // Construct the type definition string dynamically based on the number of parameters
    $types = str_repeat('s', count($params) - 1) . 'i'; // Adjusted to include 'i' for integer

    // Add the types string as the first element in the parameters array
    array_unshift($params, $types);

    // Call bind_param with the updated parameters array
    call_user_func_array([$stmtUpdate, 'bind_param'], $params);

    if ($stmtUpdate->execute()) {
    header("Location: list_tilok.php");
    exit; // Make sure to exit to prevent further execution
    } else {
    echo "Error updating record: " . $stmtUpdate->error;
    }

    $stmtUpdate->close();
    } else {
    echo "Error preparing statement: " . $conn->error;
    }

    mysqli_close($conn);
}
?>