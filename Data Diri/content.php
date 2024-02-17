<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(isset($_SESSION["is_login"]))
    {
    header('Location: ../HomePage/content.php');   
    }?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Data Diri</title>

</head>

<body>
<nav class="nav-container">
            <ul class="kiri">
            <li class="Logo">PT Mencari Cinta Sejati</li>
                <li><a class="hitam" href="../HomePage/content.php">Lowongan</a></li>
            </ul>
            <ul class="kanan">
                <li>
                    <a href="#">Akun</a>
                    <ul class="dropdown">
                        <li><a class="Login" href="../Login Rekruter/content.php">Login</a></li>
                    </ul>
                </li>
            </form>
            </ul>
        </nav>
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
        <p>Copyright @ 2024 PT Mencari Cinta Sejati, Designed by Kelompok 6 Pweb</p>
    </footer>

</body>


</html>