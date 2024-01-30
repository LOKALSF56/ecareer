<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecareer";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn) 
{
    $buka=mysqli_select_db($conn,$database);
    if(!$buka){
    }
}
else{
    echo "Database Tidak Terhubung";
}
?>