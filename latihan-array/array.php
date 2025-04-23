<?php 
    $var = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $var2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $var3 = [
        "nama" => "Budi",
        "umur" => 20,
        "alamat" => "Jakarta"
    ];
    $hari = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu"];
    // menambahkan elemen kedalam array
    $hari[] = "ahad";
    print_r($hari);
    // fungsi count() digunakan untuk menghitung jumlah elemen dalam array
    $count = count($hari);
    echo "<br>";
    echo ($count);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
        div {
            width: 100px;
            height: 100px;
            background-color: red;
            text-align: center;
            line-height: 100px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <br>
    <?php foreach($var as $angka) :?>
        <div>
            <?= $angka; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>