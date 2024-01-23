<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
    <h1 class="logo"> PT. Mencari Cinta Sejati</h1>
        <nav class="nav-container">
            <ul class="kiri">
                <li><a class="home" href="#">Home</a></li>
                <li><a class="hitam" href="#">Lowongan</a></li>
                <li><a class="hitam" href="#">Pengumuman</a></li>
            </ul>
            <ul class="kanan">
                <li>
                    <a href="#">Akun</a>
                    <ul class="dropdown">
                        <li><a class="Login" href="#">Login</a></li>
                        <li><a class="Regis" href="#">Mendaftar</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main class="isiweb">
        <div class="center">
            <form id="form" >
                <p>Email</p>
                <input type="email" id="email" >
                <p calss="error-symbol" id="emerr"></p>
                <p>Password</p>
                <input type="password" id="pass" >
                <p class="error-symbol" id="errmess"hidden></p>
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember me</label>
                <button type="button" onclick="validateForm()"> Submit </button>
                <a class="forgotpass" href="#">Lupa Password?</a>
            </form>
        </div>
    </main>
        <footer>
            <p>Copyright @ 2024 PT Mencari Cinta Sejati, Designed by Kelompok 6 Pweb</p>
        </footer>
    </body>
</html>