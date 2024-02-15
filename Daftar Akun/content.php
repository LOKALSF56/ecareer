<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Pendaftaran</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Form Pendaftaran</h2>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="no_hp">No HP:</label>
            <input type="tel" name="no_hp" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="repassword">Re-Password:</label>
            <input type="password" name="repassword" required>

            <button type="submit" name="submit">Daftar</button>
        </form>
    </div>
    <footer>
        <p>Copyright @ 2024 PT Mencari Cinta Sejati, Designed by Kelompok 6 Pweb</p>
    </footer>
</body>
</html>

<?php
// Konfigurasi database
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ecareer";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memproses form ketika tombol submit ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];

    // Memeriksa apakah password cocok
    if ($password != $repassword) {
        echo "Password tidak cocok.";
    } else {
        // Enkripsi password sebelum disimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Memasukkan data ke database
        $sql = "INSERT INTO users (nama, email, no_hp, password) VALUES ('$nama', '$email', '$no_hp', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "Pendaftaran berhasil.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Menutup koneksi database
    $conn->close();
}
?>
