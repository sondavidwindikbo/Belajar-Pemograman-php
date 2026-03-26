
<?php
// contoh  percetakan kode di php 
echo "hello, world!";

// variable di php
//harus dimulai dengan$,
//tidak boleh spasi

echo "<br>";	//ini untuk beri enter baris agar tidak tertmpuk

$angka_1 = 2000;
echo $angka_1;

echo "<br>";

//contoh variabel 
$x = 5;
$y = 3;
$jumlah = $x * $y;

echo $jumlah;

//tipedata 
//integer(bilangan bulat) mengunakan decrement
echo"<br>";

$a = 3;
$a++;

echo $a;

//tipedatafloat(decimal)
echo"<br>";

$ab = 3;
$bb = 2;
$cd = $ab/$bb;

echo $cd; 

//tipe data string(huruf)


echo"<br>";

$nama = ucwords("hmnk");
// $pesan = "selamat datang, $nama"; cara 1
$pesan = "selamat datang, ";

echo $pesan . $nama;   //cara 2 pangil mengunkan titik . titik ini untuk pengabunga dua nilai

echo"<br>";

//TIPE DATA BOLEAN 
//tipe data bolean (2 nilainya yaitu true dan false)
//Tipe data boolean digunakan untuk melakukan pengecekan terhadap suatu kondisi.
//Untuk melakukan pengecekan sebuah kondisi, biasanya kita membutuhkan operator perbandingan atau operator logika.
// Operator	Nama	Contoh	KeterangaN
// ==	sama dengan	$a == $b	true apabila $a sama dengan $b
// !=	tidak sama dengan	$a != $b	true apabila $a tidak sama dengan $b
// <>	tidak sama dengan	$a <>$b	true apabila $a tidak sama dengan $b
// >	lebih besar dari	$a > $b	true apabila $a lebih besar dari $b
// <	lebih kecil dari	$a < $b	true apabila $a lebih kecil dari $b
// >=	lebih besar / sama dengan	$a >= $b	true apabila $a lebih besar / sama dengan $b
// <=	lebih kecil / sama dengan	$a <= $b	true apabila $a lebih kecil / sama dengan $b
//**var_dump() ** : digunakan untuk menampilkan nilai / isi sebuah variabel disertai dengan tipe data


$r = false; //true bernilai 1 jika di ui

//echo $r; cara 1
var_dump($r); //cara 2
echo"<br>";

$e = 10;
$f = 5;
$g = $e > $f; //bisa gunakan opertor perbandigan diatas untuk belajar 

var_dump($g);

// Operator Logika
// Operator	Nama	Contoh	Keterangan
// and	And	$a and $b	true apabila keduanya ($a dan $b) bernilai true
// or	Or	$a or $b	true apabila salah satu ($a atau $b) bernilai true
// xor	Xor	$a xor $b	true apabila salah satu saja dari $a atau $b bernilai true, bukan keduanya
// &&	And	$a && $b	true apabila keduanya ($a dan $b) bernilai true
// ||	Or	$a || $b	true apabila salah satu ($a atau $b) bernilai true
// !	Not	!$a	true apabila $a bernilai false
echo "<br>";
echo "<br>";
//cth

$ef = true;
$fg = false;
$gh = $ef && $fg; 

var_dump($gh); //hasilnya 

//
echo "<br>";
echo "<br>";
//tipe data array
$a = ["sapi","kambing","anjing"];
$a[] = "babi"; //menambah data array

print_r($a); //menampilkan index dan nilainya secara keselurahan
echo "<br>";
echo $a[2];

echo "<br>";
var_dump($a); //menamilkan tipedata,index,dan nilainya secara keseluruhan

//array assosiatif

// Array Assosiatif adalah array yang memiliki
//  kata kunci yang kita tentukan sendiri.

// Kalau pada pembahasan array sebelumnya, 
// setiap kata kunci ditentukan secara otomatis berdasarkan
//  urutan elemen tersebut di dalam array dimulai dari 0,
// sedangkan pada array assosiatif ini, kata kunci bisa kita 
// tentukan sendiri sesuai kebutuhan kita. Kata kunci pada 
// array assosiatif biasanya berupa nama kunci atau string.
//cth : 
echo "<br>";
echo "<br>";

$datadiri = [
    "nama" => "Hmnk",
    "gol_darah" => "O",
    "alamat" => "Kotaraja",
];

echo "Nama : " . $datadiri["nama"]."<br>";
echo  "Gol_Darah : " . $datadiri["gol_darah"]."<br>";
echo "Alamat : " .  $datadiri["alamat"]."<br>";

echo "<br>";
echo "<br>";


//array multi dimensi;

$amd ="//array multi dimensi ";

$a = [1,true, ["jeruk","anjing","buku"]];  

echo $amd."<br>";
var_dump($a);
echo "<br>";
echo $a[2][0];          //cara pemangilan array 2 dimensi

echo "<br>";
echo "<br>";

$omnivora = ["anjig","manusia","babi"];
$karnivora = ["singa","serigala","komodo"];
$herbivora = ["sapi","kambing","kerbau"];

$binatang = [
    "omnivora" => $omnivora, 
    "karnivora" => $karnivora, 
    "herbovora" => $herbivora
    ];

var_dump($binatang);
echo "<br>";
echo $binatang[0][2];
echo "<br>";
echo $binatang["karnivora"][0];

?>