<?php
// Koneksi database
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ecareer";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mengambil nilai dari formulir
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$no_id = $_POST['no_id'];
$pengalaman = $_POST['pengalaman'];
$pendidikan = $_POST['pendidikan'];
$email = $_POST['email'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];

// Query untuk menyimpan data ke dalam tabel di database
$sql = "INSERT INTO nama_tabel (nama, tempat_lahir, tanggal_lahir, no_id, pengalaman, pendidikan, email, password, no_hp)
VALUES ('$nama', '$ttl', '$tanggal_lahir', '$no_id', '$pengalaman', '$pendidikan', '$email', '$password', '$no_hp')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
