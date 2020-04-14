<?php
  // Melakukan koneksi ke database
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

  // Memilih database
  mysqli_select_db($conn, "tubes_193040052") or die("Database salah");

  // query mengambil objek dari tabel didalam database
  $result = mysqli_query($conn, "SELECT * FROM makanan");

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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><img src="assets/img/<?php echo $row['gambar'] ?>" height="250px"></td>
            <td><?php echo $row['nama_makanan'] ?></td>
            <td><?php echo $row['terbuat'] ?></td>
            <td><?php echo $row['tempat'] ?></td>
            <td><?php echo $row['harga'] ?></td>
          </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>