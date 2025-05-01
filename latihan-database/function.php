<?php
// Koneksi ke database (urutan koneksi connecting -> fetching -> Query )

// 1. connecting
$conn = mysqli_connect("localhost", "root", "", "phpdasar"); 

// 2. Ambil data(fetch) mahasiswa dari hasil query ada 4 metode:


// a. mysqli_fetch_row() -> mengembalikan array numerik
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[2]);
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// if (!$result) {
//     echo mysqli_error($conn);
//     exit;
// }
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
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>