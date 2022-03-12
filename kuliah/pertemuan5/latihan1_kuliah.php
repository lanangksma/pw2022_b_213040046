<?php 

// Array
// Adalah variabel yang dapat menyimpan lebih dari satu nilai sekaligus.
$hari1 = "Senin";
$hari2 = "Selasa";
$hari7 = "Minggu";

$bulan1 = "Januari";
$bulan12 = "Desember";

$mahasiswa = "MarinKitagawa";

// Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis"]; // Cara Baru dalam menulis array
$bulan = array("Januari", "Februari", "Maret"); // Cara Lama dalam menulis array
$myArray = [100, "Lanang", true];

// Menampilkan Array
// Meampilkan 1 Elemen menggunakan Index, dimulai dari 0
echo $hari[1], "<br>";
echo $bulan[2], "<hr>";

// Menampilkan Semua Isi Array Selkaligus
// var_dump() atau print_r() >>> Khusus untuk debugging
var_dump($hari);    echo "<br>";
print_r($bulan);    echo "<br>";
var_dump($myArray); echo "<hr>";

// Mencetak semua isi array menggunakan Looping
// For
for($i = 0; $i < count($hari); $i++){
    echo $hari[$i], "<br>";
}

// Foreach
foreach($bulan as $bln){
    echo $bln, "<br>";
}
echo "<hr>";
// Memanipulasi Array
// Menampilkan elemen di akhir Array
$hari[] = "Jum'at";
$hari[] = "Sabtu";
var_dump($hari);
echo "<br>";
foreach($hari as $hri){
    echo $hri, "<br>";
}
?>