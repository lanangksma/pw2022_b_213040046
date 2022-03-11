<?php 

function hai($waktu = "Malam" , $nama = "Kitagawa Marin") {
    return "Selamat $waktu $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Pract</title>
</head>
<body>
    <h1><?= hai("pagi", "Lanang Kusuma"); ?><h1>
</body>
</html>