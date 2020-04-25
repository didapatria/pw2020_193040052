<?php
require 'functions.php';

$id = $_GET['id'];
$food = query("SELECT * FROM foods WHERE id = $id")[0];

// cek apakah tombol sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Diubah!');
            document.location.href = 'admin.php';
          </script>";
  }
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
  <title>iFood - Ubah Data Makanan</title>
</head>

<body>
  <div class="container">
    <h3>Form Ubah Data Makanan</h3>
    <form action="" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="id" type="hidden" name="id" class="validate" value="<?= $food['id']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="nama" type="text" name="nama" class="validate" autofocus required value="<?= $food['nama']; ?>">
          <label for="nama">Nama Makanan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="foto" type="text" name="foto" class="validate" required value="<?= $food['foto']; ?>">
          <label for="foto">Foto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="porsi" type="text" name="porsi" class="validate" required value="<?= $food['porsi']; ?>">
          <label for="porsi">Porsi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="bahan" type="text" name="bahan" class="validate" value="<?= $food['bahan']; ?>">
          <label for="bahan">Bahan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="caramasak" type="text" name="caramasak" class="validate" value="<?= $food['caramasak']; ?>">
          <label for="caramasak">Cara Masak</label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button class="waves-effect waves-light btn-small" type="submit" name="ubah" style="width: 200px">Ubah Data!
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a href="admin.php" class="waves-effect waves-light btn-small" style="width: 200px">Kembali</a>
        </div>
      </div>
    </form>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>