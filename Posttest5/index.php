<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Animeku</title>
    <link rel="icon" href="Gambar/ANIMEKU.png">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="close-popup">&times;</span>
            <h2>Selamat Datang di Animeku!</h2>
            <p>Terima kasih telah mengunjungi situs.</p>
        </div>
    </div>
    
    <header>
        <nav class="navbar-section">
              <img src="Gambar/ANIMEKU.png" class="gambar"  width="100"height="100"/>
            <menu class="navbar-list" id="navbar-list">
              <li class="navbar-item">
                <a href="index.php"> Home </a>
              </li>
              <li class="navbar-item">
                <a href="aboutme.html"> About Me </a>
              </li>
              <li class="navbar-item" >
                <a href="login.php"> Login </a>
              </li>
            </menu>
            <label class="toggle-switch">
                <input type="checkbox" id="mode-toggle">
                <span class="slider"></span>
            </label>
            <button class="hamburger" id="hamburger">
              <i data-feather="menu"></i>
            </button>
          </nav>
    </header>
    <main class="utama" id="utama">
        <div class="title_utama">
            <h1>List Anime</h1>
        </div>
        <div class="gambar-menu">
            <a href="gambar1.php"><img src="Gambar/gambar1.jpg" ></a>
           <a href="gambar2.html"> <img src="Gambar/gambar2.jpg" ></a>
            <a href="gambar3.html"><img src="Gambar/gambar3.jpg" ></a>
            <a href="gambar4.html"><img src="Gambar/gambar4.jpg" ></a>
        </div>
        <div>
          <button onclick="location.href='tambah.php'">komentar</button>
        </div>
    </main>
    <footer class="footer-akhir">
        <p>
            <a href="index.html">Home</a> 
            <a href="aboutme.html">About Me</a>
            <a href="https://classroom.google.com/c/NzEwMjM1NDMwMjIz/a/NzIxMDE2NzUwMDM3/details" target="_blank">Posttest5</a>
        </p>
    </footer>
    <script>
        feather.replace();
    </script>
    <script src="Javascript/script.js"></script>
</body>
</html>