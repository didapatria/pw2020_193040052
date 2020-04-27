<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
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
  <title>Detail Mahasiswa</title>
</head>

<body>
  <div class="container">
    <div class="col s12 m7">
      <h2 class="header">Detail Mahasiswa</h2>
      <div class="card horizontal">
        <div class="card-image">
          <img src="img/<?= $m['gambar'] ?>" style="height: 300px">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p><b><?= $m['nama'] ?></b></p>
            <p>NRP : <?= $m['nrp'] ?></p>
            <p>Email : <?= $m['email'] ?></p>
            <p>Jurusan : <?= $m['jurusan'] ?></p>
          </div>
          <div class="card-action">
            <div class="row">
              <div class="col">
                <a href="ubah.php?id=<?= $m['id']; ?>" class="waves-effect waves-light btn-small">Ubah</a>
                &nbsp;
                <a href="hapus.php?id=<?= $m['id']; ?>" class="waves-effect waves-light btn-small" onclick="return confirm('Apakah Anda Yakin Hapus Data?')">Hapus</a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <a href="index.php" class="waves-effect waves-light btn-small">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>