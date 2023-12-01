<?php

require 'assets/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet;
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Data Login'); // Set a title for the second sheet

// Ambil data dari database
$kon = mysqli_connect("localhost", "root", "", "fishee");

if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Modify your SQL query to perform an inner join with tb_pemetaan
$sql = "SELECT login.username as Username, login.usertype as Peran, login.nama_lengkap, login.no_telp as No_Telepon
        FROM login";

$data = mysqli_query($kon, $sql);

if (mysqli_num_rows($data) > 0) {
    // Fetch column names and set as header
    $column_header = [];
    while ($column = mysqli_fetch_field($data)) {
        $column_header[] = $column->name;
    }

    /*
    // Move pemilik to the front
    $pemilikIndex = array_search('pemilik', $column_header);
    unset($column_header[$pemilikIndex]);
    array_unshift($column_header, 'pemilik');
*/

    $j = 1;
    foreach ($column_header as $header) {
        $sheet->setCellValueByColumnAndRow($j, 1, $header);
        $j++;
    }

    $i = 2; // Start from row 2
    while ($rcd = mysqli_fetch_assoc($data)) {
        $j = 1;
        foreach ($column_header as $columnName) {
            $sheet->setCellValueByColumnAndRow($j, $i, $rcd[$columnName]);
            $j++;
        }
        $i++;
    }

    // Simpan file .xlsx
    $writer = new Xlsx($spreadsheet);
    $writer->save('data-login/fishee-login.xlsx');

    echo "Data berhasil diekspor xlsx";

    header("Location: data-pengunjung.php");
    exit();
} else {
    echo "Tidak ada data yang ditemukan";
}

mysqli_close($kon);
?>