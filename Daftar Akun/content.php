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
        <form action="process.php" method="post" enctype="multipart/form-data">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="ttl">Tempat Lahir:</label>
            <input type="text" id="ttl" name="ttl" required>

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>

            <label for="no_id">NO ID:</label>
            <input type="text" id="no_id" name="no_id" required>

            <label for="pengalaman">Pengalaman:</label>
            <input type="text" id="pengalaman" name="pengalaman" required>

            <label for="pendidikan">Pendidikan:</label>
            <input type="text" id="pendidikan" name="pendidikan" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="no_hp">No HP:</label>
            <input type="text" id="no_hp" name="no_hp" required>

            <label for="lampiran">Lampiran CV:</label>
            <input type="file" id="lampiran" name="lampiran">

            <input type="submit" value="Submit">
        </form>
    </div>

    <footer>
        &copy; 2024 PT Mencari Cinta Sejati, Design by Kelompok 6 Pweb
    </footer>

</body>

</html>
