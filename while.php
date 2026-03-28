<?php 
// Sama seperti for, while digunakan untuk mengulang perintah / blok kode program selama
//  kondisi yang dihasilkan bernilai TRUE.

$warna = ['merah','biru','hijau','kuning','biru','hijau','kuning','merah','merah','merah'];
$jumlah = 0;

$i = 0;

while ($i < 10){
    if($warna[$i] == 'merah'){
        $jumlah++;
    }

    $i++;
}

echo "jumlah warna $jumlah";


?>