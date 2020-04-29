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

<body>
  <!-- Header -->
  <header>
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><span class="title">iFood</span></a>
        <ul class="right hide-on-med-and-down">
          <li>
            <form>
              <div class="input-search">
                <i class="material-icons prefix">search</i>
                <input id="cari" name="keyword" type="text" class="validate" placeholder="cari masakan" autocomplete="off">
              </div>
            </form>
          </li>
          <li>
            <a href="php/login.php" class="btn btn-small waves-effect waves-light white red-text">
              <i class="material-icons left">directions_walk</i>
              Login
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="card-panel" style="margin-top: 15px;">
      <main>
        <div class="row">
          <?php if (empty($foods)) : ?>
            <tr>
              <td colspan="10">
                <h1>Data Tidak Ditemukan</h1>
              </td>
            </tr>
          <?php else : ?>
            <div class="col s12">
              <div class="row">
                <?php foreach ($foods as $food) : ?>
                  <div class="col s3">
                    <div class="card">
                      <div class="card-image">
                        <img class="activator img-cover" src="assets/img/<?= $food['foto'] ?>">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?= $food['nama'] ?></span>
                      </div>
                      <div class="card-action">
                        <a href="php/detail.php?id=<?= $food['id'] ?>">Detail</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <?php if (isset($_GET['keyword'])) : ?>
          <div class="row">
            <div class="col">
              <a href="index.php" class="btn btn-small waves-effect waves-light">Refresh</a>
            </div>
          </div>
        <?php endif; ?>
      </main>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <!--Custom Js-->
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>