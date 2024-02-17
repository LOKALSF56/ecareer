<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Data Diri</title>

</head>

<body>

    <div class="container">
        <h2>Form Data Diri</h2>
        <form method="POST" action="process.php" enctype="multipart/form-data">
            <label for="EMAIL">Email:</label>
            <input type="EMAIL" id="EMAIL" name="EMAIL" required>

            <label for="PASSWORD">Password:</label>
            <input type="PASSWORD" id="PASSWORD" name="PASSWORD" required>

            <label for="NAMA_LENGKAP">Nama Lengkap:</label>
            <input type="NAMA_LENGKAP" name="NAMA_LENGKAP" required>

            <label for="NOKTP">NO KTP:</label>
            <input type="text" id="NOKTP" name="NOKTP" required>

            <label for="NOHP">NO HP:</label>
            <input type="text" id="NOHP" name="NOHP" required>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <footer>
        &copy; 2024 PT Mencari Cinta Sejati, Design by Kelompok 6 Pweb
    </footer>

</body>


</html>