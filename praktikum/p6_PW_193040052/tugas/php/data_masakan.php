<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  $foods = query("SELECT * FROM foods WHERE
                    nama LIKE '%$keyword%' OR
                    porsi LIKE '%$keyword%' OR
                    bahan LIKE '%$keyword%' OR
                    caramasak LIKE '%$keyword%' ");
} else {
  $foods = query("SELECT * FROM foods");
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

  <title>iFood ADM - Admin Panel</title>

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
        <a href="#" id="burgerNav" class="brand-logo"><i class="material-icons">menu</i> <span class="title">iFood</span></a>
        <ul class="right hide-on-med-and-down nav-wrapper">
          <!-- Search -->
          <li class="nav-wrapper">
            <form action="" method="get">
              <div class="input-field">
                <input id="search" type="search" name="keyword" autofocus>
                <label type="submit" name="cari" class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </li>
          <!-- Dropdown Trigger -->
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdown1">
              Adinda Fadhil Patria<i class="material-icons right">arrow_drop_down</i>
            </a>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">Config</a></li>
              <li><a href="../index.php">Logout</a></li>
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
        <h3 class="ma-0">iFood</h3>
        <p class="ma-0">Administrator Panel</p>
      </div>
    </li>
    <li>
      <div class="divider mt-0"></div>
    </li>
    <li><a class="waves-effect" href="admin.php">Welcome</a></li>
    <li class="active"><a class="waves-effect" href="#!">Data Masakan</a></li class="active">
    <li><a class="waves-effect" href="#!">Config</a></li>
    <li>
      <div class="divider mt-0"></div>
    </li>
    <li><a class="waves-effect" href="../index.php">Logout</a></li>
  </ul>

  <main class="open">
    <div class="row">
      <div class="col">
        <div class="breadcrumb-area color-grey">
          <a href="#!" class="breadcrumb">Welcome</a>
          <a href="#!" class="breadcrumb">Data Masakan</a>
        </div>
        <h5 class="mb-0">Data Masakan</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <a href="tambah.php" class="waves-effect waves-light btn-small" type="submit" name="tambah">
          <i class="material-icons left">add</i>
          Tambah Data Masakan
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <table class="striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Foto</th>
              <th>Nama Masakan</th>
              <th>Porsi</th>
              <th>Bahan</th>
              <th>Cara Memasak</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php if (empty($foods)) : ?>
              <tr>
                <td colspan="10">
                  <h1>Data Tidak Ditemukan</h1>
                </td>
              </tr>
            <?php else : ?>
              <?php $i = 1 ?>
              <?php foreach ($foods as $food) : ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><img class="img-cover" src="../assets/img/<?= $food['foto'] ?>" alt=""></td>
                  <td><?= $food['nama'] ?></td>
                  <td><?= $food['porsi'] ?></td>
                  <td>
                    <div class="food-content"><?= $food['bahan'] ?></div>
                  </td>
                  <td>
                    <div class="food-content"><?= $food['caramasak'] ?></div>
                  </td>
                  <td>
                    <a href="ubah.php?id=<?= $food['id'] ?>" class="waves-effect waves-light btn-small" type="submit" name="ubah" style="width: 110px">
                      <i class="material-icons left">edit</i>
                      Ubah
                    </a>
                    <a href="hapus.php?id=<?= $food['id'] ?>" onclick="return confirm('Hapus Data')" class="waves-effect waves-light btn-small" type="submit" name="hapus" style="width: 110px">
                      <i class="material-icons left">delete</i>
                      Hapus
                    </a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach ?>
            <?php endif; ?>
          </tbody>
        </table>
        <?php if (isset($_GET['keyword'])) : ?>
          <div class="row">
            <div class="col">
              <a href="data_masakan.php" class="waves-effect waves-light btn-small">Refresh</a>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </main>

  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.sidenav').sidenav();

      // mengaktifkan dropdown pada header nav
      $(".dropdown-trigger").dropdown();

      $("#burgerNav").click(function() {
        $('header').toggleClass('open');
        $('main').toggleClass('open');
        $('.sidenav').toggleClass('close');
      });
    });
  </script>
</body>

</html>