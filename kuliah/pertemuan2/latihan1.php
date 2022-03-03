<?php 
	//pertemuan 2, belajar sintaks PHP

	// Nilai
	
	// Angka (integer), tulisan (string), true/false(boolean)
	
	echo "Muhamad Lanang Abid Kusuma"; //string	
	echo "<br>";
	echo 10; //integer
	echo "<br>";
	echo false; //boolean true=1 false=null	

	echo "<hr>";

	//Variabel
	//Tempat menyimpan NILAI
	//Awalai dengan tanda $
	//Boleh mengandung angka, tidak boleh diawali angka
	//jika ada space bisa di ganti jadi underscore atau strip

	$nama = "Muhamad Lanang Abid Kusuma";

	echo $nama;

	echo "<hr>";

	//STRING
	//(' ') , (" ") conditional bisa menggunakan yg mana saja

	$hari = "Jum'at";
	echo $hari;
	echo "<br>";
	echo 'Lanang: "Hallo, Semua"';
	echo "<br>";
	//Escape Character (\)
	echo "Lanang: \"Selamat Hari Jum'at\"";
	echo "<br>";
	echo 'Lanang: "Selamat Hari Juma\'at';
	echo "<br>";
	//Interpolasi
	//mencetak langsung isi variabel
	//hanya bisa oleh (" ")
	echo "Hello Nama saya $nama";
	echo "<hr>";

	//Concat / pemggabung string
	$nama_depan = "Muhamad Lanang";
	$nama_belakang = "Abid Kusuma";
	echo $nama_depan , " " , $nama_belakang;
	echo "<br>";
	echo 'Lanang: "Selamat Hari "', "Jum'at";

	echo "<hr>";

	//Operator
	//Aritmarika
	//(+),(-),(/),(%)
	echo 1 + 1; //hasil 1 + 1 adalah 2
	echo "<br>";
	echo 'Hasil 1 + 1 adalah ' , 1 + 1;
	echo "<br>";
	echo (1 + 2) * 3 - 4;
	echo "<br>";
	echo 11 % 2;
	echo "<br>";
	echo 1 + "1" + 1;
	echo "<hr>";

	//Perbandingan
	//(<),(>),(<=),(>=),(==),(!=)
	echo 1 < 5; // True
	echo 1 > 5; // False
	echo "<br>";
	echo 1 == "1";
	echo "<hr>";

	//Identitas / Strict Comparison
	//(===),(!==)
	echo 1 === "1"; // False
	echo "<hr>";

	//increment / decrement
	//tambah 1 / kurang 1
	//(++),(--)
	$x = 10;
	++$x;
	++$x;
	echo $x;
	echo "<br>";
	$y = 10;
	echo ++$x;
	echo "<br>";
	echo $x++;
	echo "<hr>";

?>
