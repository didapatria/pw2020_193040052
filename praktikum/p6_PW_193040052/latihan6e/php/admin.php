<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $foods = query("SELECT * FROM foods WHERE
                    nama LIKE '%$keyword%' OR
                    porsi LIKE '%$keyword%' OR
                    bahan LIKE '%$keyword%' OR
                    caramasak LIKE '%$keyword%' ");
} else {
    $foods = query("SELECT * FROM foods");
}
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
    <nav>
        <div class="nav-wrapper teal">
            <a href="#!" class="brand-logo"><i class="material-icons">food</i>iFood</a>
            <div class="right hide-on-med-and-down">
                <form action="" method="get">
                    <div class="input-field">
                        <input id="search" type="search" name="keyword" autofocus>
                        <label type="submit" name="cari" class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                    <!-- <input type="text" name="keyword" id="" autofocus>
                    <button type="submit" name="cari">Cari!</button> -->
                </form>
            </div>
        </div>
    </nav>
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
            <?php if (empty($foods)) : ?>
                <tr>
                    <td colspan="10">
                        <h1>Data Tidak Ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach ($foods as $food) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $food['id'] ?>" class="waves-effect waves-light btn-small">Ubah</a>
                            <a href="hapus.php?id=<?= $food['id'] ?>" onclick="return confirm('Hapus Data')" class="waves-effect waves-light btn-small">Hapus</a>
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
            <?php endif; ?>
        </table>
        <?php if (isset($_GET['keyword'])) : ?>
            <div class="row">
                <div class="col">
                    <a href="admin.php" class="waves-effect waves-light btn-small">Refresh</a>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>