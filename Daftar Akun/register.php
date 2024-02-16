<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "ecareer";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Query untuk menyimpan data ke database
$sql = "INSERT INTO users (username, password, email, created_at) VALUES ('$username', '$password', '$email', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
