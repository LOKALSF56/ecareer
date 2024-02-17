
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
<html lang="en">
  <head>
    <title>Lowongan</title>
    <link rel="stylesheet" href="./css/style.css" />
    <script src="asset/bg.png"></script>
  </head>
  <body>
    <!-- Navbar Start -->
    <header>
      <nav class="navbar">
        <div class="logo">
          <a href="index.html">
            PT Mencari Cinta Sejati
          </a>
        </div>


        <ul class="nav-link">
          <li><a href="../HomePage/content.php">Back</a></li>
        </ul>
      </nav>
    </header>
    <!-- Hero Section -->
    <section class="hero" id="home">
      <main class="content">
        <div class="content-caption">
          <h1>WE ARE HIRING!</h1>
         <p></p>
         <p></p>
         <p></p>
         <p></p>
         <p></p>
         <p></p>

        <?php foreach ($list_loker as $loker): ?>
                <p style="font-size: 30px;"><?= $loker["NAMA_Loker"]; ?></p>
                <p style="font-size: 20px;"><?= $loker["Desc_Loker"]; ?></p>
         <?php endforeach; ?>
         <button>
            <a href="../HomePage/export.php">Download</a>
          </button>
            <!-- <a href="../HomePage/export.php"><button a class="download" type="submit">Download</button a></a> -->
        </div>

        <div class="content-img">
          <img src="./asset/bg.png" alt="" />
        </div>
      </main>
    </section>

    
  </body>
  <footer style="height: 100px;">
            <p>Copyright @ 2024 PT Mencari Cinta Sejati, Designed by Kelompok 6 Pweb</p>
    </footer>
</html>
