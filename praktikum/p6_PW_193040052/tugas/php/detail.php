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
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iFood - Detail</title>
</head>

<body>
    <div class="col s12 m7">
        <h2 class="header">Detail</h2>
        <div class="card horizontal">
            <div class="card-image">
                <img src="../assets/img/<?= $foods['foto'] ?>">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <h3><?= $foods['nama'] ?></h3>
                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                    <p>Porsi : <?= $foods['porsi'] ?></p>
                    <p>Bahan : <?= $foods['bahan'] ?></p>
                    <p>Cara Masak : <?= $foods['caramasak'] ?></p>
                </div>
                <div class="card-action">
                    <a href="../index.php" class="waves-effect waves-light btn-small">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>