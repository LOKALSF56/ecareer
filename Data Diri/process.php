<?php
include "../koneksiDB/koneksi.php";

$EMAIL = $_POST['EMAIL'];
$PASSWORD = $_POST['PASSWORD'];
$NAMA_LENGKAP = $_POST['NAMA_LENGKAP'];
$NOKTP = $_POST['NOKTP'];
$NOHP = $_POST['NOHP'];

$sql = "INSERT INTO datadiri (EMAIL, PASSWORD, NAMA_LENGKAP, NOKTP, NOHP)
VALUES ('$EMAIL', '$PASSWORD', '$NAMA_LENGKAP', '$NOKTP', '$NOHP')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: ../HomePage/content.php");
$conn->close();
?>
