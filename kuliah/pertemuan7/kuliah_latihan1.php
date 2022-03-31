<?php 
// Superglobals
// Variabel bawaan PHP yang bisa diakses di mana pun
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET = ["nama" => 'Rifialdi Faturrochman', "email" => "rifialdi.faturrochman@gmail.com"];
// $_GET["nama"] = "Rifialdi F";
// $_GET["email"] = "rifialdi.faturrochman@gmail.com";

// var_dump($_GET);


?>

<!-- <h1>Siiuuu, <?= $_GET["nama"]; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Lanang&npm=213040046&email=mlanangak@gmail.com">Lanang</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Jimmy&npm=213040050&email=jimmyh@gmail.com">Jimmy</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Rifialdi&npm=213040049&email=rifialdif@gmail.com">Rifialdi</a>
    </li>
</ul>