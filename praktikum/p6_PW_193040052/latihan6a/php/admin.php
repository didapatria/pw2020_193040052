<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$foods = query("SELECT * FROM foods");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=tabel, initial-scale=1.0">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <title>iFood ADM - Admin Panel</title>
</head>

<body>
    <div class="container">
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
                        <a href=""><button>Ubah</button></a>
                        <a href=""><button>Hapus</button></a>
                    </td>
                    <td><img class="img-cover" src="../assets/img/<?= $food['foto'] ?>" alt=""></td>
                    <td><?= $food['nama'] ?></td>
                    <td><?= $food['porsi'] ?></td>
                    <td><textarea name="" id="" cols=" 30" rows="10"><?= $food['bahan'] ?></textarea></td>
                    <td><textarea name="" id="" cols="30" rows="10"><?= $food['caramasak'] ?></textarea></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>