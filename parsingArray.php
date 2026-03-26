//Tanpa parsing, data nggak bisa ditampilkan
//Parsing array = mengambil, membaca, atau mengolah isi array

<?php
if(!empty($_POST['proses']))
{
    print_r($_POST);
}

//cth 2
$data = ["apel", "jeruk", "mangga"];

foreach ($data as $buah) {
    echo $buah;
}

?>
<form action="" method="post">
Nama: <input type="text" name="nama">
<br><br>
Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
<br><br>
Program Studi :
<select name="program_studi">
  <option value="SI">Sistem Informasi</option>
  <option value="TI">Teknik Informatika</option>
  <option value="MI">Manajemen Informatika</option>
</select>
<br><br>
<input type="submit" name="proses" value="submit">
</form>