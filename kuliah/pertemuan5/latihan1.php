<?php 

// Array //
// Variabel yang dapat memiliki banyak nilai //
// elemen pada array boleh memiliki tipe data yang berbeda //
// pasangan antara key dan value //
// key-nya adalah index, yang dimulai dari 0 //

// Membuat array //
// Cara lama //
$hari = array("Senin", "Selasa", "Rabu");

// Cara baru //
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array //
// var_dump() / print_r() //
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen pada array //
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<hr>";

// Menambahkan elemen baru pada array //
$hari[] = "Kamis";
$hari[] = "Jum'at";
var_dump($hari);

?>