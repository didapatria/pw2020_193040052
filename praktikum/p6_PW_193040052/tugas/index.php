<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

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

  <title>iFood</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body class="bgcolor">
  <!-- Header -->
  <header>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><i class="material-icons"></i><span class="title">iFood</span></a>
        <ul class="right hide-on-med-and-down nav-wrapper">
          <!-- Search -->
          <li class="nav-wrapper">
            <form action="" method="get">
              <div class="input-field">
                <input id="search" type="search" name="keyword">
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
              <li><a href="php/admin.php">Admin</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container container-color">
    <div class="row">
      <?php if (empty($foods)) : ?>
        <tr>
          <td colspan="10">
            <h1>Data Tidak Ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php foreach ($foods as $food) : ?>
          <div class="col s3 m3">
            <div class="card small card-cover">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator img-cover" src="assets/img/<?= $food['foto'] ?>">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4 card-title"><?= $food['nama'] ?><i class="material-icons right">more_vert</i></span>
                <p><a href="php/detail.php?id=<?= $food['id'] ?>" class="waves-effect waves-light btn-small">Detail</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?= $food['nama'] ?><i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif; ?>
    </div>
    <?php if (isset($_GET['keyword'])) : ?>
      <div class="row">
        <div class="col">
          <a href="index.php" class="waves-effect waves-light btn-small">Refresh</a>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script>
    $(document).ready(function() {
      // mengaktifkan dropdown pada header nav
      $(".dropdown-trigger").dropdown();
    });
  </script>
</body>

</html>