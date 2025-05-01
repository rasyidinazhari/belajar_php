<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// Ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
if (!$result) {
    echo mysqli_error($conn);
    exit;
}
// Ambil data(fetch) mahasiswa dari hasil query ada 4 metode:

// 1. mysqli_fetch_row() -> mengembalikan array numerik
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[2]);

// 2. mysqli_fetch_assoc() -> mengembalikan array asosiatif
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["nim"]);

// 3. mysqli_fetch_array() -> mengembalikan keduanya (numerik dan asosiatif)
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs[0]/$mhs["nim"]);

// 4. mysqli_fetch_object() -> mengembalikan objek

$mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <tr>
            <td>1</td>
            <td>
                <a href="">Ubah</a> | 
                <a href="">Hapus</a>
            </td>
            <td><img src="assets/img/wisnu.jpg" alt="wisnu rasyidin azhari" style="width:50px;"></td>
            <td>2213010446</td>
            <td>wisnu Rasyidin Azhari</td>
            <td>Teknik Informatika</td>
        </tr>
    </table>
</body>
</html>