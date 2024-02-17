<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
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
                        <li><a class="Regis" href="#">Mendaftar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    </header>
    <div class ="center">
        <form action="content.php" method="POST">
            <h2>Login</h2>
            <?php
                include "../koneksiDB/koneksi.php";
                session_start();
                if(isset($_SESSION["is_login"]))
                {
                header('Location: ../HomePage/content.php');   
                }
                if(isset($_POST["login"]))
                {
                    $password = $_POST["password"];
                    $username = $_POST["email"];
                    
                    $sql = "SELECT * FROM `datadiri` WHERE email='$username' AND password='$password'";
                    $result = $conn->query($sql);
                    if($result->num_rows>0)
                    {
                        $data = $result->fetch_assoc();
                        header('Location: ../HomePage/content.php');
                        $_SESSION["email"] =$data["email
                        "];
                        $_SESSION["is_login"] = true;
                    }
                    else
                    {
                        echo"email atau password tidak ada!";
                    }
                    $conn->close();
                }?>
                <div class="txt_field">
                    <input type="email" name="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <a class="ForgotPass" href="#">Lupa Password?</a>
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <button type="submit" value="login" name="login" >Login</button>
            </form>
    </div>
    </main>
        <footer>
            <p>Copyright @ 2024 PT Mencari Cinta Sejati, Designed by Kelompok 6 Pweb</p>
        </footer>
    </body>
</html>