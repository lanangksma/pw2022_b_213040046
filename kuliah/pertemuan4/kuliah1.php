<?php 

// 4 - FUNCTION
// Built - in Function

////////////////////////////////////////////////////////////

// Built - in Function Waktu
// date()
// Untuk mengetahui waktu saat ini
// Default timezone = UTC time
// Format bisa liat di documentasi php.net

echo "Built - in Function || Date <br> <br>";
echo date("d");     echo "<br>";
echo date("D");     echo "<br>";
echo date("l");     echo "<br>";
echo date("l, j F Y");
echo "<br>";
echo date("l", time());
echo "<hr>";

////////////////////////////////////////////////////////////

// time()
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970

echo time();
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l", time() + 60 * 60 * 24 * 100);
echo "<br>";
echo date("l", time() - 60 * 60 * 24 * 100); 
echo "<hr>";

////////////////////////////////////////////////////////////

// mktime()
// Membuat waktu berdasarkan format
// mktime (0, 0, 0, 0, 0, 0)
//        (Jam, Menit, Detik, Bulan, Tanggal, Tahun)

echo mktime(10, 45, 0, 3, 5, 2022);
echo "<br>";
echo date('l', mktime(0, 0, 0, 02, 19, 2003));
echo "<hr>";

echo strtotime("19 February 2003");
echo "<br>";
echo mktime(0, 0, 0, 02, 19, 2003);
echo "<br> <br> <hr> <br> <br>";

////////////////////////////////////////////////////////////

// Fungsi Built - in Matematika

echo "Built - in Function || Matematika <br>";

// pow() Untuk Pangkat
echo pow(2, 3);     echo "<br>";
// rand() Untuk memunculkan bilangan acak
echo rand(1, 10);   echo "<br>";
// round() Untuk Pembulatan ke nilai terdekat
echo round(2.7);    echo "<br>";
// ceil() Untuk pembulatan ke atas
echo ceil(2.1);     echo "<br>";
// floor() Untuk pembulatan ke bawah
echo floor(2.9);

?>