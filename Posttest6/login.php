<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $tahun = $_POST['tahun'];
    $favorit = $_POST['favorit'];
    $password = $_POST['password'];
    $profile = $_FILES['profile'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $file_name = $_FILES['foto']['name'];
    $maxFileSize = 500 * 1024; 
    $tmp_name = $profile['tmp_name'];
    $file_name = $profile['name'];
    $file_size = $profile['size'];
    if ($file_size > $maxFileSize) {
        echo "<script>alert('Ukuran file terlalu besar! Maksimal 500KB.');</script>";
        exit;
    }
    $validExtension = ['jpg', 'jpeg', 'png'];
    $fileExtension = explode('.', $file_name);
    $fileExtension = strtolower(end($fileExtension));
    $time = time(); 
    if(!in_array($fileExtension, $validExtension)) {
        echo "
            <script>
                alert('File yang diupload bukan gambar!');
                document.location.href = 'index.php';
            </script>";
            exit;
        
    } else{
        $newFileName =  date('yyyy-mm-dd'). '-' . $file_name;
        $formattedTime = date('i.s', $time);
        if(move_uploaded_file($tmp_name,'images/' .$newFileName)) {
        $sql = "INSERT INTO tbmhs VALUES (null, '$nama', '$nim', '$kelas', '$prodi', '$newFileName')";
        $result = mysqli_query($conn, $sql);
        }
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
        <form action="index.php" method="post" class="container" enctype="multipart/form-data"z>
            <div class="form-judul-isi">
                <label for="email" class="form-isi">Email</label>
                <input type="text" id="email" name="email" placeholder="Email" required class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="nama" class="form-isi">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama" required class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="tahun" class="form-isi">Tahun Bergabung</label>
                <input type="number" id="tahun" name="tahun" placeholder="Tahun Bergabung" required class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="favorit" class="form-isi">Anime Favorit</label>
                <input type="text" id="favorit" name="favorit" placeholder="Anime Favorit" required class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="password" class="form-isi">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="profile" class="form-isi">Foto Profile</label>
                <input type="file" id="profile" name="profile" placeholder="Foto Profile" required class="form-input">
            </div>
            <div>
                <button type="submit" class="login-button">
                    Login
                </button>
            </div>
        </form>
    </section>
</body>
</html>