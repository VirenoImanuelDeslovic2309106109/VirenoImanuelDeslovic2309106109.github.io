<?php
require "koneksi.php";
$daftar = [];

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = mysqli_query($conn, "SELECT * FROM login_pengguna WHERE nama LIKE '%$search%'");
} else {
    $sql = mysqli_query($conn, "SELECT * FROM login_pengguna");
}
while ($row = mysqli_fetch_assoc($sql)) {
    $daftar[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Animeku</title>
    <link rel="icon" href="Gambar/ANIMEKU.png">
    <link rel="stylesheet" href="CSS/admin.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <?php
    include "navbar2.php";
    ?>
    
    <form action="" method="GET" class="search-bar">
        <input type="text" name="search" placeholder="Search pengguna..." class="search-input" />
        <button type="submit" class="search-button">
            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
        </button>
    </form>
    <div class="hasil-pencarian">
            <?php if (count($daftar) > 0): ?>
                <ul >
                    <?php foreach ($daftar as $pengguna): ?>
                        <li><?= htmlspecialchars($pengguna['nama']); ?></li>
                    <?php endforeach; ?>
                    <?php foreach ($daftar as $pengguna): ?>
                        <li><?= htmlspecialchars($pengguna['email']); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Pengguna tidak ditemukan.</p>
            <?php endif; ?>
        </div>
    <main class="utama" id="utama">
        <div class="title_utama">
            <h1>List Pengguna</h1>
        </div>



        <!-- Bagian lain yang ada di halaman, seperti gambar -->
        <div class="gambar-menu">
            <a href="gambar1.php"><img src="Gambar/gambar1.jpg"></a>
            <a href="gambar2.html"><img src="Gambar/gambar2.jpg"></a>
            <a href="gambar3.html"><img src="Gambar/gambar3.jpg"></a>
            <a href="gambar4.html"><img src="Gambar/gambar4.jpg"></a>
        </div>
        
        <div>
          <button onclick="location.href='tambah.php'">komentar</button>
        </div>
    </main>

    <?php
    include "footer.php";
    ?>

    <script>
        feather.replace();
    </script>
    <script src="Javascript/script.js"></script>
</body>
</html>
