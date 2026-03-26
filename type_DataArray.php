
<?php
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

//tipe data null

// Null adalah tipe data khusus yang hanya dapat memiliki satu nilai yaitu NULL.

// Variabel dengan tipe data NULL adalah variabel yang tidak mempunyai nilai (kosong).

// Tips : Jika sebuah variabel tidak mempunyai nilai (kosong), maka sebaiknya kita secara otomatis dengan nilai NULL.
echo "<br>";
echo "<br>";

$datadiriy = [
    'nama' => 'son',
    'gdarah' => null,
    'alamat' => 'kotaraja'

];

echo $datadiriy['gdarah'];
echo $datadiri['status'] ?? null;


//cth 2
echo "<br>";
echo "<br>";
$pesan ="Selamat Datang";
echo $pesan??NULL;
// Contoh di atas adalah perintah mencetak $pesan, apabila pesan tidak dikenali maka akan mencetak NULL, sedangkan apabila 
// $pesan dikenali maka yang mencetak $pesan itu sendiri.

?>