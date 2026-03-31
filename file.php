<?php 
//MENULIS DAN MEMBACA FILE 
//Pada PHP, kita dapat mengelola file seperti membuat file ataupun membaca sebuah file
$message = "How Are YOu\n";

//file_put_contents('content.txt', $message, FILE_APPEND);//untuk buat file 

$isi = file_get_contents('content.txt');//untuk baca file

echo $isi;



//MENYIMPAN DALAM FORMAT SERIALIZE DAN JSON
 $siswa = [
    ['nama' => 'toni', 'kelas' => '2A', 'golongan_darah' => 'A'],
    ['nama' => 'andi', 'kelas' => '2B', 'golongan_darah' => 'B'],
    ['nama' => 'budi', 'kelas' => '2C', 'golongan_darah' => 'O'],
    ['nama' => 'citra', 'kelas' => '2A', 'golongan_darah' => 'AB'],
    ['nama' => 'dewi', 'kelas' => '2B', 'golongan_darah' => 'A'],
    ['nama' => 'eko', 'kelas' => '2C', 'golongan_darah' => 'O'],
];


//SERIALIZE

$data = serialize($siswa);

file_put_contents('content.txt', $data);

echo $output = file_get_contents('content.txt'); //medapatkan data dari file content.txt
$hasil = unserialize($output); //mengubah data serilize ke bnetuk array
print_r($hasil);


echo "<br>";

//data JSON

$dataa = json_encode($siswa);

file_put_contents('data.txt', $dataa);

echo $outputt = file_get_contents('data.txt');
$hasill = json_decode($outputt, true);
print_r($hasill);

?>