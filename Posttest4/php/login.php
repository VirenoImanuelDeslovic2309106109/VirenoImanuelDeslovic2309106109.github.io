<?php
    $nama = htmlspecialchars($_POST['nama']);
    $tahun = htmlspecialchars($_POST['tahun']);
    $password = htmlspecialchars($_POST['password']);

    echo'<h2> Anda Berhasil Login</h2>';
    echo"<p>Nama: $nama</p>";
    echo"<p>Tahun Bergabung: $tahun</p>";
    echo"<p>Password: $password</p>";
    echo"<br>";
    echo'<a href= "/coba/Posttest4/index.html" ><button>kembali ke home</button></a>';
 
?>