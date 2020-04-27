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
        <a href="#" id="burgerNav" class="brand-logo burgerNav"><i class="material-icons">menu</i> <span class="title">iFood</span></a>
        <ul class="right hide-on-med-and-down">
          <li>
            <form>
              <div class="input-search">
                <i class="material-icons prefix">search</i>
                <input id="cari" name="keyword" type="text" class="validate" placeholder="cari masakan" autocomplete="off">
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
        <div class="breadcrumb-area color-grey">
          <a href="admin.php" class="breadcrumb">Welcome</a>
          <a href="#!" class="breadcrumb">Data Masakan</a>
        </div>

        <div class="row">
          <div class="col s6 valign-wrapper">
            <h5 class="ma-0">Data Masakan</h5>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <a href="tambah.php" class="btn btn-small waves-effect waves-light" type="submit" name="ubah">
              <i class="material-icons left">add</i>
              Tambah Masakan
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <div class="card-panel">
              <table class="striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Masakan</th>
                    <th>Porsi</th>
                    <th>Bahan Masakan</th>
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
                          <a href="ubah.php?id=<?= $food['id'] ?>" class="btn btn-small waves-effect waves-light" type="submit" name="ubah">
                            <i class="material-icons left">edit</i>
                            Ubah
                          </a>
                          &nbsp;
                          <a href="hapus.php?id=<?= $food['id'] ?>" onclick="return confirm('Apakah Anda Yakin Hapus Data?')" class="btn btn-small waves-effect waves-light" type="submit" name="hapus">
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
                    <a href="data_masakan.php" class="btn btn-small waves-effect waves-light">Refresh</a>
                  </div>
                </div>
              <?php endif; ?>
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