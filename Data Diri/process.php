<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ecareer";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mengambil nilai dari formulir dan melakukan sanitasi
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$ttl = mysqli_real_escape_string($conn, $_POST['ttl']);
$tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
$no_id = mysqli_real_escape_string($conn, $_POST['no_id']);
$pengalaman = mysqli_real_escape_string($conn, $_POST['pengalaman']);
$pendidikan = mysqli_real_escape_string($conn, $_POST['pendidikan']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Menyusun query SQL INSERT
$sql = "INSERT INTO datadiri (EMAIL, PASSWORD, NAMA_LENGKAP, NOKTP, NOHP)
VALUES ('$email', '$hashed_password', '$nama', '$no_id', '$no_hp')";

// Menjalankan query dan memeriksa hasilnya
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
