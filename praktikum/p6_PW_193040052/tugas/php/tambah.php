<?php
require 'functions.php';

// cek apakah tombol sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Author -->
  <meta name="description" content="Tugas Mata Kuliah">
  <meta name="author" content="Dida Patria">

  <title>iFood - Tambah Data Masakan</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h3>Form Tambah Data Masakan</h3>
    <form action="" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="nama" type="text" name="nama" class="validate" autofocus required>
          <label for="nama">Nama Masakan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="foto" type="text" name="foto" class="validate" required>
          <label for="foto">Foto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="porsi" type="text" name="porsi" class="validate" required>
          <label for="porsi">Porsi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="bahan" type="text" name="bahan" class="validate" required>
          <label for="bahan">Bahan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="caramasak" type="text" name="caramasak" class="validate" required>
          <label for="caramasak">Cara Masak</label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button class="waves-effect waves-light btn-small" type="submit" name="tambah" style="width: 200px">Tambah Data!
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a href="data_masakan.php" class="waves-effect waves-light btn-small" style="width: 200px">Kembali</a>
        </div>
      </div>
    </form>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>