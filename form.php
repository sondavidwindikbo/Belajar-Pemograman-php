<?php 
//jadi $_get  sebenarnya  memilik nilai array


$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

// var_dump($_GET);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

    <form >
        <input type="text" name="nama">
        <input type="text" name="alamat">
        <input type="submit">
    </form>

    <h1>Selamat Datang <?php echo $nama; ?> </h1>
    <p>Selamat belajar Pemograman PHP</p>
    <p>anda belajar di <?php echo $alamat; ?> </p>
</body>
</html>