<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
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
    <div class="row">
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

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>