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

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
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
  <main class="ma-0 pa-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col s6 vh100 valign-wrapper center-align bg-primary white-text">
          <div class="m-auto">
            <h2>Selamat Datang</h2>
            Kelola data masakan dan resep masakan melalui iFood Admin Panel
          </div>
        </div>
        <div class="col s6 vh100 valign-wrapper center-align">
          <div class="m-auto">
            <div class="row">
              <div class="col">
                <h2 class="header">Login</h2>
              </div>
            </div>
            <div class="form-login card-panel">
              <form action="" method="POST">
                <?php if (isset($error)) : ?>
                  <tr>
                    <td colspan="10">
                      <h1>Username atau Password salah</h1>
                    </td>
                  </tr>
                <?php endif; ?>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="txt_username" name="username" type="text" class="validate" autofocus required>
                    <label for="txt_username">Username</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="txt_password" name="password" type="password" class="validate" required>
                    <label for="txt_password">Password</label>
                  </div>
                </div>
                <div class="row">
                  <div class="remember col s12 left-align">
                    <label for="remember">
                      <input id="remember" type="checkbox" name="remember" class="filled-in">
                      <span>Remember me</span>
                    </label>
                  </div>
                </div>
                <div class="row mb-0">
                  <div class="col s12 right-align">
                    <button class="btn waves-effect waves-light" type="submit" name="submit" value="submit">
                      <i class="material-icons left">check</i>
                      Submit
                    </button>
                    <a href="../index.php" class="btn waves-effect waves-light red" type="submit" name="cancel">
                      <i class="material-icons left">cancel</i>
                      Cancel
                    </a>
                  </div>
                  <div class="row mb-0">
                    <div class="col s12 left-align">
                      <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!--JavaScript at end of body for optimized loading-->
  <script src=" ../js/jquery.min.js"> </script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>

  <!--Custom Js-->
  <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>