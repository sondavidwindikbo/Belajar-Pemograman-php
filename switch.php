<?php 

$nilai = 'B';

switch($nilai) {
    case "A";
        echo "nilai anda sangat memuaskan";
    break;
    case "B";
        echo "nilan anda memuaskan";
    break;
    case "C";
    echo "Nilai anda tidak memuaskan";
    break;
    default ;
        echo "nilai anda tidak terdapat di database";
}

echo "<br>";
echo "<br>";


$hari = "sabtu";

switch ($hari){
    case "senin":
        echo "Selamat bekerja";
    break;
    case "selasa";
        echo "selamat berjuang";
    break;
    case "Rabu";
        echo "Tetap semangat";
    break;
    case "kamis";
        echo "Tetap Kuat";
    break;
    case "jumat";
        echo "selamat berlibur";
    break;
    default;
    echo "See You On Monday";
}

//conntoh di blade
// @switch($status)
//     @case('success')
//         <span class="text-green-500">Berhasil</span>
//         @break

//     @case('error')
//         <span class="text-red-500">Gagal</span>
//         @break

//     @default
//         <span>Status tidak diketahui</span>
// @endswitch

echo "<br>";
echo "<br>";


//PENGECEKAN KONDISI GANDA

//bisa pake == dan || untuk pengkodisian

$ukuran = "xl";
$warna = "biru";

$harga = 8000;
$harga_tambahan = 15000;

if($ukuran == "xl" || $warna == "merah"){

        echo "Total Harga = " . ($harga + $harga_tambahan);

}else {
    echo "total = " . $harga;
}

?>