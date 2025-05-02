<?php
require 'function.php';


if( isset($_POST["submit"])){
    if( tambah($_POST) > 0 ) {
        echo "berhasil";
        header("Location: index.php");
        exit;
    } else {
        echo "
            <script>
                alert('Gagal menambahkan data!');
                document.location.href = 'index.php';
            </script>>
        ";
        echo "<br>";
        echo mysqli_error($conn);
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa | Siakad</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <br>
    <a href="index.php">Kembali ke Dashboard</a>
    <br>
    <br>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">jurusan</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>