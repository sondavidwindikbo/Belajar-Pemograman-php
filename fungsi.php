<?php
//fungsi adalah dalah blok kode yang bisa digunakan berulang kali untuk melakukan suatu tugas tertentu.
//2 jenis funsion 1.funsiaon yang sudah disediakan php 2. funsion yang kita buat sendiri
//ucwords funsi membuat hruf kapital per kata
//strtoupper fungsi membua huruf kapiatl per kata

$nama = strtoupper("son david");

//phpinfo();

echo "<br>";
echo "<br>";

$kalimat = "saya suka makan nasi dan ubi karna saya orang papua , sekaran saya tinggal di kotaraja bersama dua kaka saya. saya lebih suka menghabiskan waktu di kamar bermain laptop dari pada bermain sembarangan.
";

echo "<br>";

echo str_word_count($kalimat). "<br>";//funsi untuk menghitung kata
echo str_replace('saya', 'ison', $kalimat); //fungsi untuk menganti kata 

echo "<br>";


//MEMBUAT FUNGSI SENDIRI ATAU MANUAL 

function cetakPesan($nama = null) {
    if(empty ($nama)){
        echo "selamat Datang!";
    }else{
        echo "selamat Datang, $nama !";
    }
    
}


//SCOPE VARIABLE

cetakPesan('batu');

echo "<br>";
echo "<br>";

function greeting($name = null){
    global $name;
    if(empty($name)){
        echo "good Night";
    }else{
        echo "good Night, $name !";
    }
}

$name ="Jefri";

greeting();


//RETURN IN FUNCTION
// Maksud dari mengembalikan nilai dari fungsi, adalah mengembalikan 
//output (hasil proses dari sebuah fungsi) agar dapat digunakan di luar fungsi.

// Untuk mengembalikan nilai pada fungsi kita dapat menggunakan statemen
// return, ketika menggunakan statmen return maka eksekusi fungsi berhenti dan nilai dikembalikan (return) ke pemanggil fungsi.

echo "<br>";
echo "<br>";

$alas = 10;
$tinggi = 5;

function luasSegitiga($alas, $tinggi){

    $luas = $alas *  $tinggi / 2;

    return $luas;
}

$hasil = luasSegitiga($alas, $tinggi);

echo $hasil;
echo "<br>";


function luasJajarGenjang($alas, $tinggi){
    $luas = ($alas + $tinggi) / 2;

    return $luas;
}

$luasJajarGenjang = luasJajarGenjang($alas, $tinggi);
echo $luasJajarGenjang;


echo "<br>";
echo "<br>";



//FUNSI PARAMETER REFENSI


function kalilipat(&$angka){
    $angka = $angka * 2;

    return $angka;
}

$x = 9;

echo kalilipat($x)."<br>";
echo kalilipat($x)."<br>";
echo kalilipat($x)."<br>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $nama; ?></h1>
</body>
</html>