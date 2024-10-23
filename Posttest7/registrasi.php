<?php
require "koneksi.php";

if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $tahun = $_POST['tahun'];
    $favorit = $_POST['favorit'];
    $password = password_hash ($_POST['password'], PASSWORD_DEFAULT );
    $role = $_POST['role'];
    $checkQuery = "SELECT * FROM login_pengguna WHERE nama = '$nama'";
    $checkResult = mysqli_query($conn, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
    // Jika username sudah digunakan
    echo "
    <script>
    alert('Username sudah digunakan! Silakan gunakan username lain.');
    document.location.href = 'registrasi.php';
    </script>
    ";
    } else {
        $sql = "INSERT INTO login_pengguna (email, nama, tahun_bergabung, anime_favorit, password, foto, role) 
        VALUES ('$email', '$nama', '$tahun', '$favorit', '$password', '$newFileName', '$role')";
        $result = mysqli_query($conn, $sql);
        // if ($conn->query($sql) === TRUE)
        if ($result) {
            echo "
            <script>
            alert('Registrasi berhasil!'); 
            document.location.href = 'login.php';
            </script>";
        } else {
            echo "
            <script>
            alert('Registrasi gagal'); 
            document.location.href = 'registrasi.php';
            </script>";
        }
    }
    
    // $tahun = $_POST['tahun'];
    // $favorit = $_POST['favorit'];
    // $password = password_hash ($_POST['password'], PASSWORD_DEFAULT );
    // $profile = $_FILES['profile'];
    // $tmp_name = $profile['tmp_name'];
    // $file_name = $profile['name'];
    // $file_size = $profile['size'];
    // $role = $_POST['role'];
    // $maxFileSize = 500 * 1024;
    
    // if ($file_size > $maxFileSize) {
    //     echo "<script>alert('Ukuran file terlalu besar! Maksimal 500KB.');</script>";
    //     exit;
    // }
    // $validExtension = ['jpg', 'jpeg', 'png'];
    // $fileExtension = explode('.', $file_name);
    // $fileExtension = strtolower(end($fileExtension));
    // if (!in_array($fileExtension, $validExtension)) {
    //     echo "
    //         <script>
    //             alert('File yang diupload bukan gambar!');
    //             document.location.href = 'index.php';
    //         </script>";
    //     exit;
    // } else {
    //     $checkQuery = "SELECT * FROM login_pengguna WHERE username = '$username'";
    //     $checkResult = mysqli_query($conn, $checkQuery);
    //     if (mysqli_num_rows($checkResult) > 0) {
    //     // Jika username sudah digunakan
    //         echo "
    //         <script>
    //         alert('Username sudah digunakan! Silakan gunakan username lain.');
    //         document.location.href = 'registrasi.php';
    //         </script>
    //         ";
    //     } else {
    //         $newFileName = date('Y-m-d') . '-' . $file_name;
    //         if (move_uploaded_file($tmp_name, 'images/' . $newFileName)) {
    //             // Perbaikan query SQL
    //             $sql = "INSERT INTO login_pengguna (email, nama, tahun_bergabung, anime_favorit, password, foto, role) 
    //                     VALUES ('$email', '$nama', '$tahun', '$favorit', '$password', '$newFileName', '$role')";
    //             $result = mysqli_query($conn, $sql);

    //             // Verifikasi hasil query
    //             if ($result) {
    //                 echo "
    //                 <script>
    //                 alert('Registrasi berhasil!');
    //                 document.location.href = 'login.php';
    //                 </script>";
    //             } else {
    //                 echo "
    //                 <script>alert('Registrasi gagal');
    //                 document.location.href = 'registrasi.php';
    //                 </script>";
    //             }
    //         }
    //     }    
    // }
}
?>

<!-- <!DOCTYPE html>
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
                REGISTRASI
            </h1>
        </hgroup>
        <form action="" method="POST" class="container" enctype="multipart/form-data">
            <div class="form-judul-isi">
                <label for="email" class="form-isi">Email</label>
                <input type="text" id="email" name="email" placeholder="Email"  class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="nama" class="form-isi">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama"  class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="tahun" class="form-isi">Tahun Bergabung</label>
                <input type="number" id="tahun" name="tahun" placeholder="Tahun Bergabung"  class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="favorit" class="form-isi">Anime Favorit</label>
                <input type="text" id="favorit" name="favorit" placeholder="Anime Favorit"  class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="password" class="form-isi">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"  class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="profile" class="form-isi">Foto Profile</label>
                <input type="file" id="profile" name="profile" placeholder="Foto Profile"  class="form-input">
            </div>
            <div class="form-judul-isi">
                <label for="role" class="form-isi">Role</label>
                <select name="role" id="role" class="form-input" >
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
            <div>
                <button type="submit" class="login-button">
                    Login
                </button>
            </div>
        </form>
    </section>
</body>
</html> -->

<!DOCTYPE html>
<html>
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
                REGISTRASI
            </h1>
        </hgroup>
        <form action="registrasi.php"  class="container" method="post" enctype="multipart/form-data"> 
            <div class="form-judul-isi">
            <label for="email" class="form-isi">Email:</label>
            <input type="email" id="email" name="email" required  class="form-input" placeholder="Email">
            </div>

            <div class="form-judul-isi">
            <label for="nama" class="form-isi">Nama:</label>
            <input type="text" id="nama" name="nama" required placeholder="Nama"  class="form-input">
            </div>

            <div class="form-judul-isi">
                <label for="tahun" class="form-isi">Tahun Bergabung</label>
                <input type="number" id="tahun" name="tahun" placeholder="Tahun Bergabung"  class="form-input">
            </div>

            <div class="form-judul-isi">
                <label for="favorit" class="form-isi">Anime Favorit</label>
                <input type="text" id="favorit" name="favorit" placeholder="Anime Favorit"  class="form-input">
            </div>

            <div class="form-judul-isi">
                <label for="password" class="form-isi">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"  class="form-input">
            </div>


            <div class="form-judul-isi">
                <label for="role" class="form-isi">Role</label>
                <select name="role" id="role" class="form-input" >
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>

            <button type="submit" name="submit" class="login-button">
                Daftar
            </button>
        </form>
</section>
</body>
</html>