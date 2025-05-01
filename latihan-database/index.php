<?php
// Koneksi ke database dengan hubungkan ke function.php
require 'function.php'; 
$mahasiswa = query("SELECT * FROM mahasiswa");

// Ambil data dari tabel mahasiswa



// $mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | rasyidinazhari</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($mahasiswa as $row):?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a> | 
                <a href="">Hapus</a>
            </td>
            <td><img src="assets/img/<?= $row["gambar"]?>" alt="<?= $row["nama"]?>" style="width:50px;"></td>
            <td><?= $row["nim"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["jurusan"]?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach;?>
    </table>
</body>
</html>