<?php

// Mengecek apakan ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$foods = query("SELECT * FROM foods WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Author -->
    <meta name="description" content="Tugas Mata Kuliah">
    <meta name="author" content="Dida Patria">

    <title>iFood - Detail</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><span class="title">iFood</span></a>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="col s12 m7">
            <div class="row">
                <div class="col">
                    <h2 class="header">Detail</h2>
                </div>
            </div>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="../assets/img/<?= $foods['foto'] ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h3><?= $foods['nama'] ?></h3>
                        <p>Porsi : <?= $foods['porsi'] ?></p>
                        <p>Bahan : <?= $foods['bahan'] ?></p>
                        <p>Cara Masak : <?= $foods['caramasak'] ?></p>
                    </div>
                    <div class="card-action">
                        <a href="../index.php" class="btn btn-small waves-effect waves-light" type="submit" name="ubah">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <!--Custom Js-->
    <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>