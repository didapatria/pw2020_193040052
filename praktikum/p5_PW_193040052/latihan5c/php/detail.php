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
    $makanan = query("SELECT * FROM makanan WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?php echo $makanan['gambar'] ?>" height="250px">
        </div>
        <div class="keterangan">
            <p><?php echo $makanan['nama_makanan'] ?></p>
            <p><?php echo $makanan['terbuat'] ?></p>
            <p><?php echo $makanan['tempat'] ?></p>
            <p><?php echo $makanan['harga'] ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>