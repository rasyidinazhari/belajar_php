<?php
    $mahasiswa = [
        ["Wisnu Rasyidin Azhari", "2213010446", "Teknik Informatika", "email@gmail.com"],
        ["Budi", "2213010447", "Teknik Informatika", "budi@budi.com"],
        ["Andi", "2213010448", "Teknik Informatika", "andi@andi.com"],
        ["Siti", "2213010449", "Teknik Informatika", "siti@gmail.com"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
            <br>
        <?php endforeach ?>
        <li>Wisnu Rasyidin Azhari</li>
        <li>2213010446</li>
        <li>Teknik Informatika</li>
        <li>email@gmail.com</li>
    </ul>

</body>
</html>