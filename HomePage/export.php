<?php
require "../koneksiDB/koneksi.php";

// Ambil data dari tabel loker
$result =$conn->query("SELECT * FROM `loker`");

// Buat file Excel
$filename = "data_loker_" . date('Ymd') . ".xls";

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");

// Tulis header baris untuk Excel
echo "No\tLowongan\tDeskripsi\n";

// Tulis data ke dalam file Excel
foreach ($result as $loker) {
    echo $loker['LokerID'] . "\t" . $loker['NAMA_Loker'] . "\t" . $loker['Desc_Loker'] . "\n";
}
?>