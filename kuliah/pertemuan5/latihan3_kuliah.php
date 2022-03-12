<?php 

$mahasiswa = [
    ["Muhamad Lanang Abid Kusuma", "213040046", "lanangkusuma1902@protonmail.com", "Teknik Informatika"],
    ["JamJam", "213040057", "jamjam@gmail.com", "Teknik Informatika"], 
    ["Jimmy", "213040050", "jimmy@hotmail.com", "Teknik Informatika"], 
    ["Ipul", "213040049", "rifiald@poipoi.com", "Teknik Informatika"]
];

?>

<?php foreach($mahasiswa as $mhs){ ?>
    <ul>
        <li>Nama:   <?= $mhs[0]?> </li>
        <li>NPM:    <?= $mhs[1]?> </li>
        <li>Email:  <?= $mhs[2]?> </li>
        <li>Jurusan:<?= $mhs[3]?> </li>
    </ul>
<?php } ?>