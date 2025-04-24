<?php
//Superglobals
// var_dump($_GET);
// echo "<br>";
// var_dump($_POST);
// echo "<br>";
// var_dump($_REQUEST);
// echo "<br>";

// var_dump($_SERVER);
// echo "<br>";

// var_dump($_SESSION);
// echo "<br>";

// var_dump($_COOKIE);

//metode request
// $_GET
// $_POST

// $_GET["nama"] = "Wisnu Rasyidin Azhari";
// $_GET["nim"] = "2110817210010";
// var_dump($_GET);

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
];

$news = [
    [
        "title" => "Berita 1",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.",
        "author" => "Wisnu Rasyidin Azhari",
        "date" => "2023-10-01",
    ],
    [
        "title" => "Berita 2",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.",
        "author" => "Rizky Maulana",
        "date" => "2023-10-02",
    ],
    [
        "title" => "Berita 3",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.",
        "author" => "Muhammad Rizki",
        "date" => "2023-10-03",
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <link rel="stylesheet" href="getpost.css">
</head>
<body>
    <?php foreach($news as $berita): ?>
        <div class="container">
            <h1><?= $berita["title"]?></h1>
            <p>Penulis: <?= $berita["author"]?></p>
            <p>Tanggal: <?= $berita["date"]?></p>
            <a href="news.php?title=<?= $berita["title"]?>&content=<?= $berita["content"]?>&author=<?= $berita["author"]?>&date=<?= $berita["date"]?>">
                <div class="button-berita">
                    <p>Baca Selengkapnya</p>
                </div>
            </a>
        </div>
    <?php endforeach?>
</body>
</html>