<?php
  // menghubungkan dengan file php lainnya
  require 'php/functions.php';

  // melakukan query
  $makanan = query("SELECT * FROM makanan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0" style="text-align: center">
        <tr style="text-transform: uppercase">
            <th>no</th>
            <th>gambar</th>
            <th>nama makanan</th>
            <th>terbuat</th>
            <th>tempat</th>
            <th>harga</th>    
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($makanan as $makan) { ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><img src="assets/img/<?php echo $makan['gambar'] ?>" height="250px"></td>
            <td><?php echo $makan['nama_makanan'] ?></td>
            <td><?php echo $makan['terbuat'] ?></td>
            <td><?php echo $makan['tempat'] ?></td>
            <td><?php echo $makan['harga'] ?></td>
          </tr>
        <?php $i++ ?>
        <?php } ?>
    </table>
</body>
</html>