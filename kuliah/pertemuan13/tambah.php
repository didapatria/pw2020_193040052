<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'index.php';
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

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST" enctype="multipart/form-data">
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
        <div class="col s12">
          <label for="gambar">Gambar</label>
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input id="gambar" type="file" name="gambar" class="validate gambar" onchange="previewImage()">
            </div>
            <div class="file-path-wrapper">
              <input id="gambar" class="file-path validate" type="text" name="gambar" placeholder="Upload one or more files">
            </div>
          </div>
          <div class="">
            <img src="img/default.png" width="150" class="img-preview">
          </div>
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
          <a href="index.php" class="waves-effect waves-light btn-small" style="width: 150px">Kembali</a>
        </div>
      </div>
    </form>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>