<?php
    function greet($name = 'Admin', $waktu= 'Datang') {
        return "Selamat $waktu, $name!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= greet(); ?></h1>
</body>
</html>