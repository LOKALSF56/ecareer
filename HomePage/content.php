<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    include "../koneksiDB/koneksi.php";
    function select($query)
    {
        //konek ke db
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
    
        while ($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row; // Fix variable name here from $rows to $row
        }
        return $rows;
    }
    $list_loker =select("SELECT * FROM `loker`");
    ?>
    <header>
        <nav class="nav-container">
            <ul class="kiri">
            <li class="Logo">PT Mencari Cinta Sejati</li>
                <li><a class="hitam" href="#">Lowongan</a></li>
                <li><a class="hitam" href="#">Pengumuman</a></li>
            </ul>
            <ul class="kanan">
                <li>
                    <a href="#">Akun</a>
                    <ul class="dropdown">
                        <li><a class="hitam" href="#">Login</a></li>
                        <li><a class="hitam" href="#">Mendaftar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="carausell">
            <div class="img-list" id="img-list">
                <img src="../Image/2.jpg" class ="1">
                <img src="../Image/2.jpg" class ="2"
>                <img src="../Image/3.jpg" class ="3">
            </div>
            <div class="content">
                <div class="text-content">
                    <h2>Berkarirlah Bersama Kami!</h2>
                    <p>Lorem ipsum dolor sir amet,consectur asispicing elit. Aliquam</p>
                </div>
            </div>
            <div class="btn-sec">
                <div class="btn-slide" onclick="slideImg(0)"></div>
                <div class="btn-slide" onclick="slideImg(1)"></div>
                <div class="btn-slide" onclick="slideImg(2)"></div>
            </div>
        </section>
    </main>
    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Lowongan</th>
            <th>Deksripsi</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($list_loker as $loker): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $loker["NAMA_Loker"]; ?></td>
                <td><?= $loker["Desc_Loker"]; ?></td>
                <td>
                    <input class="Lamar" type="button" value="Lamar">
                </td>
            </tr>
         <?php endforeach; ?>

</table>
    <script src="script.js"></script>
        <footer>
            <p>Copyright @ 2024 PT Mencari Cinta Sejati, Designed by Kelompok 6 Pweb</p>
        </footer>
    </body>
</html>