<?php
$hari = array("senin", "selasa", "rabu", "kamis", "jumat", "sabtu");
$bulan = ["januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "oktober", "november", "desember"];
$arr = [100, "teks", true];

//menampilkan array dengan var_dump() dan juga print_r()

$mahasiswa =  [
    [
        "nama" => "Wisnu Rasyidin Azhari",
        "nim" => "2110817210010",
        "email" => "jurusan",
        "jurusan" => "Teknik Informatika",
    ],
    [
        "nama" => "Rizky Maulana",
        "nim" => "2110817210011",
        "email" => "jurusan",
        "jurusan" => "Teknik Informatika",
    ],
    [
        "nama" => "Muhammad Rizki",
        "nim" => "2110817210012",
        "email" => "jurusan",
        "jurusan" => "Teknik Informatika",
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa tapi pake assosiative</title>
</head>
<body>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li>Nama : <?= $mhs["nama"]?></li>
            <li>nim : <?= $mhs["nim"]?></li>
            <li>email : <?= $mhs["email"]?></li>
            <li>jurusan : <?= $mhs["jurusan"]?></li>
            <br>
        <?php endforeach;?>
    </ul>
</body>
</html>
