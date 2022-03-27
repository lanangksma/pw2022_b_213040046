<?php 
$mobil = [
    [
        "merk" => "Lamborghini", 
        "nama mobil" => "Aventador", 
        "type" => "Ultimate", 
        "mesin" => "6,5 liter",
        "gambar" => "https://cdn.motor1.com/images/mgl/4JyZA/s1/lamborghini-aventador-lp-780-4-ultimae.webp"
    ],
    [
        "merk" => "Toyota", 
        "nama mobil" => "Supra", 
        "type" => "MK4", 
        "mesin" => "5,2 liter",
        "gambar" => "https://cdn-asset.jawapos.com/wp-content/uploads/2019/11/1998-toyota-supra-for-499-999.jpg"
    ],
    [
        "merk" => "Honda", 
        "nama mobil" => "Civic", 
        "type" => "Type R", 
        "mesin" => "2,0 liter",
        "gambar" => "https://images.autofun.co.id/file1/b68d069167d64751bf08d7e2a18007ed_750x420.jpg"
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

    <title>Daftar Mobil</title>
  </head>
  <body>
    <div class="container">
        <h1>Daftar Mobil</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Merk</th>
                <th scope="col">Nama mobil</th>
                <th scope="col">Type</th>
                <th scope="col">Mesin</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($mobil as $m) { ?>
                <tr class="align-middle">
                <th scope="row"><?= $no++; ?></th>
                <td>
                    <img src="<?= $m["gambar"] ?>" width="50"
                    class="rounded-circle">
                </td>
                <td><?= $m["merk"] ?></td>
                <td><?= $m["nama mobil"] ?></td>
                <td><?= $m["type"] ?></td>
                <td><?= $m["mesin"] ?></td>
                <td>
                    <a href="" class="btn badge bg-warning">edit</a>
                    <a href="" class="btn badge bg-danger">delete</a>
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
    <!-- Hebat -->
  </body>
</html>