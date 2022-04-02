

<?php 

// $_GET

$mahasiswa = [
    [
        "nama" => "Muhamad Lanang Abid Kusuma", 
        "npm" => "213040046", 
        "email" => "lanang@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.redd.it%2Fcacipx8t3jc41.jpg&f=1&nofb=1"
    ],
    [
        "nama" =>"Jimmy Hidayat",
        "npm" => "213040050",
        "email" => "jimmy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fyt3.ggpht.com%2Fa%2FAATXAJz2wr4OpjutFdpuIz0qPRPwK5VzY7KvbQTXCbVd%3Ds900-c-k-c0xffffffff-no-rj-mo&f=1&nofb=1"
    ],
    [
        "nama" =>"Rifialdi Faturrachman",
        "npm" => "213040049",
        "email" => "rifialdi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.TKA6_q4VF_RWunSvxmP8VgHaHa%26pid%3DApi&f=1"
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?> & npm=<?= $mhs["npm"]; ?> & email=<?= $mhs["email"]; ?> & jurusan=<?= $mhs["jurusan"]; ?> & gambar=<?= $mhs["gambar"]; ?> "><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>