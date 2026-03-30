<?php 
 $siswa = [
    ['nama' => 'toni', 'kelas' => '2A', 'golongan_darah' => 'A'],
    ['nama' => 'andi', 'kelas' => '2B', 'golongan_darah' => 'B'],
    ['nama' => 'budi', 'kelas' => '2C', 'golongan_darah' => 'O'],
    ['nama' => 'citra', 'kelas' => '2A', 'golongan_darah' => 'AB'],
    ['nama' => 'dewi', 'kelas' => '2B', 'golongan_darah' => 'A'],
    ['nama' => 'eko', 'kelas' => '2C', 'golongan_darah' => 'O'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($siswa as $key => $value) : ?>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Golongan Darah</th>
        </tr>
        <tr>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['kelas']; ?></td>
            <td><?php echo $value['golongan_darah']; ?></td>
          
        </tr>
    </table>
    <?php endforeach ?>
</body>
</html>