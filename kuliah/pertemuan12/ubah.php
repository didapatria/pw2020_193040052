<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tida ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Diubah');
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
  <title>Ubah Data Mahasiswa</title>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="id" type="hidden" name="id" class="validate" value="<?= $m['id']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="nama" type="text" name="nama" class="validate" autofocus required value="<?= $m['nama']; ?>">
          <label for="nama">Nama</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="nrp" type="text" name="nrp" class="validate" required value="<?= $m['nrp']; ?>">
          <label for="nrp">NRP</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate" required value="<?= $m['email']; ?>">
          <label for="email">Email</label>
          <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="jurusan" type="text" name="jurusan" class="validate" required value="<?= $m['jurusan']; ?>">
          <label for="jurusan">Jurusan</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="gambar" type="text" name="gambar" class="validate" required value="<?= $m['gambar']; ?>">
          <label for="gambar">Gambar</label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button class="waves-effect waves-light btn-small" type="submit" name="ubah" style="width: 150px">Ubah Data!
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
</body>

</html>