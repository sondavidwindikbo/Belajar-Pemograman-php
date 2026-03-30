<?php

//FOREACH
//Foreach digunakan untuk mengulang perintah / blok kode 
//program melalui indeks di dalam array.
//Foreach hanya berfungsi pada array.

//sintaks
// foreach ($array as $value) 
// {
//    kode yang harus dieksekusi;
// }



$warna = ['merah', 'biru', 'hijau', 'kuning', 'biru', 'hijau', 'kuning', 'merah', 'merah', 'merah'];
$jumlah = 0;

//cth 1
foreach ($warna as $key => $value) {
    echo "indeks $key dengan isi $value <br>";
}

echo "<br>";

//cth 2

foreach ($warna as $nomor => $nilai) {
    if ($nilai == 'merah') {
        $jumlah++;
    }
}
echo "warna $jumlah";

echo "<br>";
echo "<br>";


//BREAK DALAM PERULANGAN FOREACH

$nama = [
    'Andi',
    'Budi',
    'Citra',
    'Dewi',
    'Eka',
    'Fajar',
    'Gina',
    'Hadi',
    'Indah',
    'Joko'
];

// foreach ($nama as $key => $value){
//     echo "Nama $value <br>";

//     if($value == 'Fajar'){
//         echo "index ke $key <br>";
//     }
// }

foreach ($nama as $key => $value) {
    echo "Nama $value <br>";

    if ($value == 'Fajar') {
        echo "index ke $key <br>";
        break;
    }
}

echo "<br>";
echo "<br>";


//CONTINUE DI FOREACH

$siswa = [
    ['nama' => 'toni', 'kelas' => '2A'],
    ['nama' => 'andi', 'kelas' => '2B'],
    ['nama' => 'budi', 'kelas' => '2C'],
    ['nama' => 'citra', 'kelas' => '2A'],
    ['nama' => 'dewi', 'kelas' => '2B'],
    ['nama' => 'eko', 'kelas' => '2C'],
];

foreach ($siswa as $key => $value) {

    if ($value['kelas'] == '2A') {
        continue;

        echo "Nama :" . $value['nama'] . "<br>";
        echo "Kelas : " . $value['kelas'] . "<br><br>";
    }
}
