<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <main class="ma-0 pa-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col s6 vh100 valign-wrapper center-align teal white-text">
          <div class="m-auto">
            <h2>Selamat Datang</h2>
            Kelola data mahasiswa melalui mahasiswa Admin Panel
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
              <?php if (isset($login['error'])) : ?>
                <p style="color: red; font-style: italic"><?= $login['pesan']; ?></p>
              <?php endif; ?>
              <form action="" method="POST">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="txt_username" name="username" type="text" class="validate" autofocus autocomplete="off" required>
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
                    <button class="btn waves-effect waves-light" type="submit" name="login" value="submit">
                      <i class="material-icons left">check</i>
                      Login
                    </button>
                  </div>
                  <div class="row mb-0">
                    <div class="col s12 left-align">
                      <p><a href="registrasi.php">Tambah user baru</a></p>
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
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>