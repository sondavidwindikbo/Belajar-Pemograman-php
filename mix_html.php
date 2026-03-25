<?php

//agar php dan html mix harus tulis kode php di dalam tag html

$nama = "son david";
$alamat = "kotaraja";
$g_darah = "o";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h1>Selamat Datang, <?php echo $nama; ?></h1>
    <h2>Alamat : <?php echo $alamat; ?></h2>
    <h2>Golongan darah : <?php echo $g_darah; ?></24>
</head>
<body>
    
</body>
</html>