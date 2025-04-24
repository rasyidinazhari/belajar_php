<?php
    if (!isset($_GET["title"]) || 
        !isset($_GET["author"]) || 
        !isset($_GET["date"]) || 
        !isset($_GET["content"])) {
        header("Location: getpost.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_GET["title"]?> | Winnicode</title>
</head>
<body>
    <h1><?= $_GET["title"]?></h1>
    <p>Penulis : <?= $_GET["author"]?></p>
    <p>Tanggal : <?= $_GET["date"]?></p>
    <p><?= $_GET["content"]?></p>
    <a href="getpost.php">Kembali</a>
</body>
</html>