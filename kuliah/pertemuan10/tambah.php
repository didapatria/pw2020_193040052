<?php
require 'functions.php';

// cek apakah tombol sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'latihan.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'latihan.php';
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
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <div class="container">
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="nama" type="text" name="nama" class="validate" autofocus required>
          <label for="nama">Nama</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="nrp" type="text" name="nrp" class="validate" required>
          <label for="nrp">NRP</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate" required>
          <label for="email">Email</label>
          <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="jurusan" type="text" name="jurusan" class="validate" required>
          <label for="jurusan">Jurusan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="gambar" type="text" name="gambar" class="validate" required>
          <label for="gambar">Gambar</label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button class="waves-effect waves-light btn-small" type="submit" name="tambah" style="width: 150px">Tambah Data!
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a href="latihan3.php" class="waves-effect waves-light btn-small" style="width: 150px">Kembali</a>
        </div>
      </div>
    </form>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>