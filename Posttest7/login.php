<?php
require "koneksi.php";
session_start();
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $password = $_POST["password"];
    $query = "SELECT * FROM login_pengguna WHERE nama = '$nama'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true; 

            if ($user['role'] === 'Admin') {
                $_SESSION['role'] = 'admin'; 
                echo "
                <script>
                    alert('Login berhasil! Selamat datang Admin.');
                    document.location.href = 'admin.php';
                </script>
                ";
            } else {
                $_SESSION['role'] = 'user'; 
                echo "
                <script>
                    alert('Login berhasil! Selamat datang User.');
                    document.location.href = 'user.php';
                </script>
                ";
            }
        } else {
            echo "
            <script>
                alert('Password salah!');
            </script>
            ";
        }
    } else {
        echo "
        <script>
            alert('Username tidak ditemukan!');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-ANIMEKU</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <section class="kotak-login">
        <hgroup>
            <h1 class="judul login">
                LOGIN ANIMEKU
            </h1>
        </hgroup>
        <form action="login.php" method="post" class="container" enctype="multipart/form-data"z>
            <div class="form-judul-isi">
                <label for="nama" class="form-isi">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama" required class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="password" class="form-isi">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required class="form-input">
            <div class="font-size: 30px;">
                <a href="registrasi.php">Buat Akun</a>
            </div>
            <div class="buat_akun">
                <button type="submit" class="login-button">
                    Login
                </button>
            </div>
        </form>
    </section>
</body>
</html>