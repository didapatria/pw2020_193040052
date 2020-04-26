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
          <!-- Dropdown Trigger -->
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdown1">
              Adinda Fadhil Patria<i class="material-icons right">arrow_drop_down</i>
            </a>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">Config</a></li>
              <li><a href="../index.php">Keluar</a></li>
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
    <li class="active"><a class="waves-effect" href="admin.php">Welcome</a></li>
    <li><a class="waves-effect" href="data_masakan.php">Data Masakan</a></li>
    <li><a class="waves-effect" href="#!">Config</a></li>
    <li>
      <div class="divider mt-0"></div>
    </li>
    <li><a class="waves-effect" href="../index.php">Keluar</a></li>
  </ul>

  <main class="open">
    <div class="row">
      <div class="col">
        <h2 class="mb-0">Selamat Datang
          <br />di iFood Administrator Panel
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col s7">
        <p>
          Melalui panel administrator ini kamu bisa melakukan
          pengolahan master data seperti tambah data, ubah data dan hapus data, seperti data masakan,
          hingga data pengguna.
        </p>
        <p>
          Website ini dikerjakan untuk memenuhi salah satu tugas Pemrograman Web.
        </p>
        <div class="divider" style="margin-top:50px;"></div>
        <p>Salam Hangat,
          <br />Adinda Fadhil Patria
        </p>
      </div>
    </div>
  </main>

  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>

  <!--Custom Js-->
  <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>