<?php
$b11 = array(
    "caption" => "Top 5 Peraih rating toko tertinggi",
    "subCaption" => "Olahan Ikan",
    "xAxisName" => "Nama Toko",
    "yAxisName" => "Rating",
    "numberPrefix" => "",
    "theme" => "fint",
    "chart" => array(
      "baseFont" => "Verdana",
      "baseFontSize" => "14",
      "baseFontColor" => "#0066cc"
  )
    
);

$b12 = array(
  "caption" => "Top 5 Peraih rating toko tertinggi",
  "subCaption" => "Ikan Segar",
  "xAxisName" => "Nama Toko",
  "yAxisName" => "Rating",
  "numberPrefix" => "",
  "theme" => "fint",
  "chart" => array(
    "baseFont" => "Verdana",
    "baseFontSize" => "14",
    "baseFontColor" => "#0066cc"
)
);

$b2_O = array();
$b2_S = array();

$koneksi = mysqli_connect("localhost", "root", "", "fishee");

$query_O = "SELECT tb_pemetaan.id AS id_toko, 
            tb_pemetaan.nama_toko, 
            tb_pemetaan.lokasi, 
            tb_pemetaan.foto_thumbnail, 
            kategori_partner,
            FORMAT(AVG(ratee.rate), 2) AS average_rate
            FROM tb_pemetaan
            INNER JOIN ratee ON tb_pemetaan.id = ratee.id_toko
            WHERE kategori_partner = 'O'
            GROUP BY tb_pemetaan.id
            ORDER BY average_rate DESC
            LIMIT 5";

$query_S = "SELECT tb_pemetaan.id AS id_toko, 
            tb_pemetaan.nama_toko, 
            tb_pemetaan.lokasi, 
            tb_pemetaan.foto_thumbnail, 
            kategori_partner,
            FORMAT(AVG(ratee.rate), 2) AS average_rate
            FROM tb_pemetaan
            INNER JOIN ratee ON tb_pemetaan.id = ratee.id_toko
            WHERE kategori_partner = 'S'
            GROUP BY tb_pemetaan.id
            ORDER BY average_rate DESC
            LIMIT 5";

$hasil_O = mysqli_query($koneksi, $query_O);
$hasil_S = mysqli_query($koneksi, $query_S);

$b2_O = array();
$b2_S = array();

while ($record_O = mysqli_fetch_assoc($hasil_O)) {
    $datum_O = array("label" => $record_O['nama_toko'], "value" => $record_O['average_rate']);
    array_push($b2_O, $datum_O);
}

while ($record_S = mysqli_fetch_assoc($hasil_S)) {
    $datum_S = array("label" => $record_S['nama_toko'], "value" => $record_S['average_rate']);
    array_push($b2_S, $datum_S);
}

$gab_O = array("chart" => $b11, "data" => $b2_O);
$gab_S = array("chart" => $b12, "data" => $b2_S);

// Output JSON directly
echo json_encode(array("O" => $gab_O, "S" => $gab_S));
?>