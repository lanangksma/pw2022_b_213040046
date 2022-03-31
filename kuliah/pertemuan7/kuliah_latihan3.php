<?php 
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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($mahasiswa as $m) { ?>
                <tr class="align-middle">
                <th scope="row"><?= $no++; ?></th>
                <td>
                    <img src="<?= $m["gambar"] ?>" width="50"
                    class="rounded-circle">
                </td>
                <td><?= $m["nama"] ?></td>
                <td>
                    <a href="" class="btn badge bg-warning">edit</a>
                    <a href="" class="btn badge bg-danger">delete</a>
                    <a href="kuliah_latihan4.php?nama=<?= $m["nama"] ?> & gambar=<?= $m["gambar"] ?> & npm=<?= $m["npm"] ?> & email=<?= $m["email"] ?> & jurusan=<?= $m["jurusan"] ?>" class="btn badge bg-info">detail</a>
                </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>