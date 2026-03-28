<?php 

// // Perulangan For digunakan untuk mengeksekusi /
//  menjalankan suatu blok kode program secara berulang.

// // Suatu ketika kita membutuhkan blok 
// kode agar dijalankan berulang secara berturut-turut,
//  daripada kita harus menambahkan beberapa baris kode yang
//   hampir sama, kita dapat menggunakan loop / perulangan untuk melakukan tugas seperti ini.


// FOR
// cth 1

for ($i=20; $i>0; $i--){
    echo "$i HelLo World!"."<br>";
}

//cth 2

for ($i=1; $i<50; $i++){
    echo "$i Hallo Dunia"."<br>";
}

//cth 3 
for ($r=1; $r <= 100; $r += 2){
    echo "$r hallo";
}

echo "<br>";
echo "<br>";
echo "<br>";


//FOR ARRAY
// Perulangan for dapat digunakan untuk memudahkan pengecekan elemen array.

$warna = ['merah','biru','hijau','kuning','biru','hijau',
            'kuning','merah','merah','merah'];

$jumlah = 0;

for ($k=0; $k<10; $k++){

    if($warna[$k] == 'kuning'){
        $jumlah++;
    }
   
}
 echo "jumlah warna  sebanyak $jumlah";
?>