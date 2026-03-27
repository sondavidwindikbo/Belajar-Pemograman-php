<!-- //if else 
"if-else" atau pernyataan kondisi 
digunakan untuk melakukan sebuah proses berdasarkan kondisi tertentu. -->
<?php
//if dan if-else yang digunakan untuk 
//memberikan pilihan proses terhadap dua kondisi,

// cth 1
$nama = 'hmnk';

if($nama == 'hmnk'){
    echo "selamat datang son";


}

//cth 2
 echo "<br>";
 echo "<br>";

$nilai = 83;

if($nilai >= 50) {
    echo "anda lulus dengan nilai ". $nilai;
}else{
    echo "anda Gagal dengan nilai ". $nilai;
}


//elese if 
//elseif-else yang digunakan untuk memberikan 
//pilihan proses terhadap lebih dari dua kondisi.
 echo "<br>";
 echo "<br>";


$nillai = 73;

if($nillai >= 80){
    echo "Nilai anda A";
}else if($nillai >= 70){
    echo "nilai anda B";
}else if($nillai >= 60) {
    echo "nilai anda C";
}else if($nillai >= 50){
    echo "nilai anda D";
}else{
    echo"nilai anda E";
}



//if Bersarang (NESTED IF)
//If bersarang atau nested if digunakan untuk memberikan 
//pilihan kondisi di dalam suatu kondisi.

 echo "<br>";
 echo "<br>";

$nilai_test = 70;
$wawancara = 'B';

if ($nilai_test >= 60){
    echo "aNDA LULUS";

    if ($wawancara == 'A'){
        echo "nilai anda  memuaskan";
    }else if($wawancara == 'B'){
        echo "nilai anda cukup memuaskan";
    }else{
        echo "nilai anda tidak memuaskan ";
    }

}else {
    echo "nilai anda sangat tidak memuaskan";
}

?>