<?php 

// Array Associative //
// Array yang indexnya berupa setring yang berpasangan dengan nilainya //

$mahasiswa = [
    ["nama" => "Muhamad Lanang Abid Kusuma", "npm" => "213040046", "email" => "lanangkusuma1902@protonmail.com", "jurusan" => "Teknik Informatika"],
    ["nama" => "JamJam", "npm" => "213040057", "email" => "jamjam@gmail.com", "jurusan" => "Teknik Informatika"], 
    ["nama" => "Jimmy", "npm" => "213040050", "email" => "jimmy@hotmail.com", "jurusan" => "Teknik Informatika"], 
    ["nama" => "Ipul", "npm" => "213040049", "email" => "rifiald@poipoi.com", "jurusan" => "Teknik Informatika"]
];

// var_dump($mahasiswa[1]["email"]);
?>

<?php foreach($mahasiswa as $mhs){ ?>
    <ul>
        <li>Nama:   <?= $mhs["nama"]?> </li>
        <li>NPM:    <?= $mhs["npm"]?> </li>
        <li>Email:  <?= $mhs["email"]?> </li>
        <li>Jurusan:<?= $mhs["jurusan"]?> </li>
    </ul>
<?php } ?>
