<?php
require 'functions.php';

// cek apakah tombol sudah ditekan
if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal');
            document.location.href = 'login.php';
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

  <title>iFood - Registrasi</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="header">Registrasi</h2>
      </div>
    </div>
    <div class="card-panel">
      <form action="" method="POST">
        <div class="row mb-0">
          <div class="input-field col s12">
            <input id="username" type="text" name="username" class="validate" placeholder=" " autofocus>
            <label for="username">Username</label>
          </div>
        </div>
        <div class="row mb-0">
          <div class="input-field col s12">
            <input id="password" type="password" name="password" class="validate" placeholder=" ">
            <label for="password">Password</label>
          </div>
        </div>
        <br>
        <div class="row mb-0">
          <div class="col s12">
            <button type="submit" class="btn btn-small waves-effect waves-light" name="register">
              <i class="material-icons left">check</i>
              Registrasi
            </button>
            &nbsp;
            <a href="login.php" class="btn btn-small red waves-effect waves-light">
              <i class="material-icons left">clear</i>
              Batal
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script src=" ../js/jquery.min.js"> </script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>

  <!--Custom Js-->
  <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>