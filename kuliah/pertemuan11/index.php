<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <div class="container">
    <h2 style="text-align: center">Daftar Mahasiswa</h2>

    <a href="tambah.php" class="waves-effect waves-light btn-small">Tambah Data Mahasiswa</a>
    <form action="" method="POST">
      <input type="text" name="keyword" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
      <button type="submit" name="cari" class="waves-effect waves-light btn-small">Cari!</button>
    </form>
    <br>

    <div class="row">
      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="4">
            <p style="color: red; font-style: italic">Data Mahasiswa Tidak Ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php foreach ($mahasiswa as $m) : ?>
        <div class="col s3 m3">
          <div class="card small" style="height: 500px">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/<?= $m['gambar']; ?>">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><?= $m['nama'] ?><i class="material-icons right">more_vert</i></span>
              <p><a href="detail.php?id=<?= $m['id'] ?>" class="waves-effect waves-light btn-small">Detail</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><?= $m['nama'] ?><i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <footer><a style="color: #fff; text-shadow: 1px 1px #F0F0F0; font-size: 14px; font-family: cursive" href="../">Kembali ke Index</a></footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>