<?php
// Koneksi ke database (urutan koneksi connecting -> fetching -> Query )

// 1. connecting
// mysqli param = 1.host 2.username 3.password 4.nama database
$conn = mysqli_connect("localhost", "root", "", "phpdasar"); 

// 2. Ambil data(fetch) mahasiswa dari hasil query ada 4 metode:


// a. mysqli_fetch_row() -> mengembalikan array numerik
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[2]);
// b. mysqli_fetch_assoc() -> mengembalikan array asosiatif
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["nim"]);

// c. mysqli_fetch_array() -> mengembalikan keduanya (numerik dan asosiatif)
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs[0]/$mhs["nim"]);

// d. mysqli_fetch_object() -> mengembalikan objek
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nim);

// 3.Query
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// if (!$result) {
//     echo mysqli_error($conn);
//     exit;
// }
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    // ambil data dari tiap elemen dalam form
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);
    // var_dump($_POST);

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);
    // cek apakah data berhasil ditambahkan
    // mysqli_affected_rows() -> mengembalikan jumlah baris yang terpengaruh oleh query
    return mysqli_affected_rows($conn);
}

?>