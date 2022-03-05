<?php

//////////////////////  Latihan Membuat Fungsi    ////////////////////////

// Definisikan masih masing sisi kubus 
$a = 9;
$b = 4;

// hitung masing-masing volume kubus
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

// Hitung total 2 volume
$total = $volume_a + $volume_b;

// Kembalikan Nilai total / Output nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total <br>";
echo "<hr>";

// Deklarasi / Defijisi function
function totalVolumeDuaKubus($a, $b) {

    $volume_a = pow($a, 3);
    $volume_b = pow($b, 3);
    $total = $volume_a + $volume_b;

    return "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total <br>";
}

//pemanggilan / eksekusi function
echo totalVolumeDuaKubus(6, 9);
echo totalVolumeDuaKubus(69, 69);

//Latihan membuat fungsi segitiga
function hasilLuasSegitiga($a, $b) {
    $luasSegitiga = 1/2 * $a * $b;

    return "Luas segitiga dengan alas $a dan tinggi $b adalah $luasSegitiga <br>";
}
echo hasilLuasSegitiga(2, 4);
echo hasilLuasSegitiga(6, 9);

?>