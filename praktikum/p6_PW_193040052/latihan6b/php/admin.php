<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$foods = query("SELECT * FROM foods");

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

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <title>iFood ADM - Admin Panel</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 style="text-align: center">Daftar Makanan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="tambah.php" class="waves-effect waves-light btn-small">Tambah Data Makanan</a>
            </div>
        </div>
        <table border="1" cellpadding="10" cellspacing="0" style="text-align: center">
            <tr style="text-transform: uppercase">
                <th>#</th>
                <th>opsi</th>
                <th>gambar</th>
                <th>nama</th>
                <th>porsi</th>
                <th>bahan</th>
                <th>cara masak</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($foods as $food) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="" class="waves-effect waves-light btn-small">Ubah</a>
                        <a href="" class="waves-effect waves-light btn-small">Hapus</a>
                    </td>
                    <td><img class="img-cover" src="../assets/img/<?= $food['foto'] ?>" alt=""></td>
                    <td><?= $food['nama'] ?></td>
                    <td><?= $food['porsi'] ?></td>
                    <td>
                        <div class="food-content"><?= $food['bahan'] ?></div>
                    </td>
                    <td>
                        <div class="food-content"><?= $food['caramasak'] ?></div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </table>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>