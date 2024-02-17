<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ecareer";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

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
