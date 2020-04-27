<?php
session_start();
require 'functions.php';
// melalukan pengecekan apakah user sudah melakukan login juga sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencobakan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (hash('sha256', $row['id']) == $_SESSION['hasil']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
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

  <title>iFood - Login</title>

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
        <h2 class="header">Login</h2>
      </div>
    </div>
    <div class="card-panel">
      <form action="" method="POST">
        <?php if (isset($error)) : ?>
          <tr>
            <td colspan="10">
              <h1>Username atau Password salah</h1>
            </td>
          </tr>
        <?php endif; ?>
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
        <div class="row mb-0">
          <div class="remember col s12">
            <label for="remember">
              <input id="remember" type="checkbox" name="remember" class="filled-in" checked="checked" />
              <span>Remember me</span>
            </label>
          </div>
        </div>
        <br>
        <div class="row mb-0">
          <div class="col s12">
            <button type="submit" class="btn btn-small waves-effect waves-light" name="submit">
              <i class="material-icons left">check</i>
              Login
            </button>
            &nbsp;
            <a href="../index.php" class="btn btn-small red waves-effect waves-light">
              <i class="material-icons left">clear</i>
              Batal
            </a>
          </div>
        </div>
        <div class="row mb-0">
          <div class="col s12 card-action">
            <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
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