

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php if(isset($page_title)) {echo "$page_title";} else {echo "Geek To Code";} ?></title>
    <meta name="description" content="<?php if(isset($meta_description)) {echo "$meta_description";} ?>" >
    <meta name="keywords" content="<?php if(isset($page_title)) {echo "$page_title";} ?>" >
    <meta name="author" content="lanangksma" >

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">

</head>
<body>
    
