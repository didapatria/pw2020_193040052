<?php
require 'functions.php';

// cek apakah tombol sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'data_masakan.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'data_masakan.php';
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
  <!-- Header -->
  <header class="open">
    <nav>
      <div class="nav-wrapper">
        <a href="#" id="burgerNav" class="brand-logo burgerNav"><i class="material-icons">menu</i> <span class="title">iFood</span></a>
        <ul class="right hide-on-med-and-down">
          <!-- Dropdown Trigger -->
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdown1">
              Adinda Fadhil Patria<i class="material-icons right">arrow_drop_down</i>
            </a>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">Config</a></li>
              <li><a class="waves-effect" href="../index.php">Keluar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Sidebar -->
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li>
      <div class="user-view">
        <a href="#" id="burgerNav" class="sidenav-burger burgerNav"><i class="material-icons">close</i></a>
        <h3 class="ma-0">iFood</h3>
        <p class="ma-0">Administrator Panel</p>
      </div>
    </li>
    <li>
      <div class="divider mt-0"></div>
    </li>
    <li><a class="waves-effect" href="admin.php">Welcome</a></li>
    <li class="active"><a class="waves-effect" href="data_masakan.php">Data Masakan</a></li class="active">
    <li><a class="waves-effect" href="#!">Config</a></li>
    <li>
      <div class="divider mt-0"></div>
    </li>
    <li><a class="waves-effect" href="../index.php">Keluar</a></li>
  </ul>

  <main class="open">
    <div class="row">
      <div class="col s12">
        <div class="breadcrumb-area color-grey mb-0">
          <a href="admin.php" class="breadcrumb">Welcome</a>
          <a href="data_masakan.php" class="breadcrumb">Data Masakan</a>
          <a href="#!" class="breadcrumb">Tambah Data Masakan</a>
        </div>
      </div>
    </div>
    <div class="row valign-wrapper">
      <div class="col valign-wrapper">
        <h5 class="ma-0">Form Tambah Data Masakan</h5>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="card-panel">
          <div class="row">
            <form class="col s12" action="" method="POST">
              <div class="row mb-0">
                <div class="input-field col s12">
                  <input id="food_nama" type="text" name="nama" class="validate" placeholder=" " autofocus>
                  <label for="food_nama">Nama Masakan</label>
                </div>
              </div>
              <div class="row mb-0">
                <div class="col s12">
                  <label>Foto Masakan</label>
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>File</span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input id="food_foto" class="file-path validate" type="text" name="foto" placeholder="Upload one or more files">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-0">
                <div class="input-field col s12">
                  <input id="food_porsi" type="text" class="validate" name="porsi" placeholder=" " autofocus>
                  <label for="food_porsi">Porsi</label>
                </div>
              </div>
              <div class="row mb-0">
                <div class="input-field col s12">
                  <textarea id="food_bahan" class="materialize-textarea" name="bahan" placeholder=" "></textarea>
                  <label for="food_bahan">Bahan Masakan</label>
                </div>
              </div>
              <div class="row mb-0">
                <div class="input-field col s12">
                  <textarea id="food_cara" class="materialize-textarea" name="caramasak" placeholder=" "></textarea>
                  <label for="food_cara">Cara Memasak</label>
                </div>
              </div>
              <div class="row mb-0">
                <div class="col s12">
                  <button type="submit" class="btn btn-small waves-effect waves-light" name="tambah">
                    <i class="material-icons left">save</i>
                    Simpan Data
                  </button>
                  &nbsp;
                  <a href="data_masakan.php" class="btn btn-small red waves-effect waves-light">
                    <i class="material-icons left">clear</i>
                    Batal
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>

  <!--CKeditor-->
  <script src="../js/ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('food_cara');
    CKEDITOR.replace('food_bahan');
  </script>

  <!--Custom Js-->
  <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>