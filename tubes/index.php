<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
$foods_terbaru = query("SELECT * FROM foods ORDER BY id DESC LIMIT 4");
$foods_lainnya = query("SELECT * FROM foods ORDER BY id DESC LIMIT 4,4");

if (isset($_POST['keyword'])) {
  $foods = keyword($_POST['keyword']);
}
if (isset($_POST['keyword2'])) {
  $foods = keyword2($_POST['keyword2']);
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

  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <title>iFood</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="font-caveat">
  <!-- Hero Image -->
  <div class="hero">
    <div class="container hero-header">
      <nav>
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">
            <div class="hero-logo">
              <img src="assets/img/logo.png">
              <span class="logo-title">iFood</span>
            </div>
          </a>
          <ul class="right hide-on-med-and-down">
            <li class="active">
              <a href="index.php">
                Beranda
              </a>
            </li>
            <li>
              <a href="php/list.php">
                Daftar Resep
              </a>
            </li>
            <li>
              <a href="php/login.php" class="btn btn-small waves-effect waves-light">
                <i class="material-icons left">directions_walk</i>
                Masuk
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container">
      <div class="row">
        <div class="col s6">
          <h1 class="ma-0 mt-10 font-PermanentMarker">Temukan resep masakanmu!</h1>
          <p class="font24">
            Nikmati pengalaman memasak pertama kamu dan berikan masakan yang terbaik
            untuk orang yang kamu sayangi
          </p>
          <form class="d-flex align-center form-search" method="POST">
            <div class="input-search border-right-0">
              <i class="material-icons prefix">search</i>
              <input id="cari" name="keyword" type="text" class="validate keyword" placeholder="cari resep masakan.." autocomplete="off">
            </div>
            <button type="submit" class="btn btn-small btn-search waves-effect waves-light orange">
              Cari Resep
            </button>
          </form>
        </div>
        <div class="col s6 right-align">
          <img src="assets/img/welcome_food.png">
        </div>
      </div>
    </div>
  </div>

  <!-- Resep -->
  <section class="resep">
    <section class="food-list latest">
      <div class="container">
        <div class="row">
          <div class="col">
            <h4 class="mt-0">
              Resep Terbaru
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <?php if (empty($foods_terbaru)) : ?>
              <div class="row">
                <div class="col s7">
                  <h4 class="mt-0">
                    Data Tidak Ditemukan
                  </h4>
                </div>
              </div>
            <?php else : ?>
              <div class="row">
                <?php foreach ($foods_terbaru as $food) : ?>
                  <div class="col s3">
                    <div class="card small">
                      <div class="card-image">
                        <img class="activator img-cover" src="assets/img/galeri/<?= $food['foto'] ?>">
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
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <section class="food-list">
      <div class="container">
        <div class="row">
          <div class="col s7">
            <h4 class="mt-0">
              Resep Lainnya
            </h4>
          </div>
          <div class="col s5 right-align">
            <form class="d-inline-block left-align" method="POST">
              <div class="input-search ma-0">
                <i class="material-icons prefix">search</i>
                <input id="cari" name="keyword2" type="text" class="validate keyword2" placeholder="cari resep masakan.." autocomplete="off">
              </div>
            </form>
          </div>
        </div>
        <div class="row resep-lainnya">
          <div class="col s12">
            <?php if (empty($foods_lainnya)) : ?>
              <div class="row">
                <div class="col s7">
                  <h4 class="mt-0">
                    Data Tidak Ditemukan
                  </h4>
                </div>
              </div>
            <?php else : ?>
              <div class="row">
                <?php foreach ($foods_lainnya as $food) : ?>
                  <div class="col s3">
                    <div class="card small">
                      <div class="card-image">
                        <img class="activator img-cover" src="assets/img/galeri/<?= $food['foto'] ?>">
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
              <!-- Pagination -->
              <div class="row">
                <div class="col s12 center-align mt-10">
                  <a href="php/list.php?halaman=1" class="btn btn-small orange">
                    Lihat keseluruhan resep
                  </a>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  </section>

  <!-- Footer -->
  <footer class="contact-footer font18">
    <div class="container">
      <div class="row">
        <div class="col l5 s12">
          <h5 class="white-text">
            <a href="index.php" class="brand-logo">
              <div class="hero-logo">
                <img src="assets/img/logo.png">
                <span class="logo-title2">iFood</span>
              </div>
            </a>
          </h5>
          <p class="grey-text text-lighten-4">
            Memasak sendiri masakanmu dari rumah dengan mudah dan praktis. Nikmati pengalaman memasak pertama kamu dan berikan masakan yang terbaik untuk orang yang kamu sayangi
          </p>
          <p class="grey-text text-lighten-4">
            Adinda Fadhil Patria
          </p>
        </div>
        <div class="col l3 offset-l1 s12">
          <h5 class="white-text">Contact</h5>
          <ul>
            <div class="row">
              <div class="col mb-10">
                <li><i class="material-icons left">phone</i>Phone: (+62)819 1260 1216</li>
              </div>
              <div class="col mb-10">
                <li><i class="material-icons left">email</i>Email: didapatria3@gmail.com</li>
              </div>
              <div class="col mb-10">
                <li><i class="material-icons left">location_on</i>CO3 Residence (Panorama) Jl. Kapt. Abdul Hamid No. 86, Bandung, West Java, Indonesia.</li>
              </div>
            </div>
          </ul>
        </div>
        <div class="col l2 offset-l1 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <div class="row">
              <div class="col">
                <li>
                  <a class="grey-text text-lighten-3" href="https://www.facebook.com/didapatriaa">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                      <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g fill="#ffffff">
                          <path d="M86,0c-47.4935,0 -86,38.5065 -86,86c0,43.11467 31.76267,78.71867 73.143,84.93933v-62.14933h-21.27783v-22.60367h21.27783v-15.04283c0,-24.90417 12.13317,-35.83333 32.8305,-35.83333c9.9115,0 15.1575,0.73817 17.63717,1.06783v19.72983h-14.11833c-8.78633,0 -11.85367,8.33483 -11.85367,17.72317v12.35533h25.74983l-3.49017,22.60367h-22.25967v62.3285c41.97517,-5.69033 74.36133,-41.581 74.36133,-85.1185c0,-47.4935 -38.5065,-86 -86,-86z"></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                </li>
              </div>
              <div class="col">
                <li>
                  <a class="grey-text text-lighten-3" href="https://www.instagram.com/didapatria">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;">
                      <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g fill="#ffffff">
                          <path d="M49.92548,0c-27.49519,0 -49.92548,22.43029 -49.92548,49.92548v72.14904c0,27.49519 22.43029,49.92548 49.92548,49.92548h72.14904c27.49519,0 49.92548,-22.43029 49.92548,-49.92548v-72.14904c0,-27.49519 -22.43029,-49.92548 -49.92548,-49.92548zM49.92548,13.23077h72.14904c20.33714,0 36.69471,16.33173 36.69471,36.69471v72.14904c0,20.33714 -16.33173,36.69471 -36.69471,36.69471h-72.14904c-20.33714,0 -36.69471,-16.33173 -36.69471,-36.69471v-72.14904c0,-20.33714 16.33173,-36.69471 36.69471,-36.69471zM135.61538,26.46154c-5.47837,0 -9.92308,4.44471 -9.92308,9.92308c0,5.47837 4.44471,9.92308 9.92308,9.92308c5.47837,0 9.92308,-4.44471 9.92308,-9.92308c0,-5.47837 -4.44471,-9.92308 -9.92308,-9.92308zM86,39.69231c-25.50541,0 -46.30769,20.80228 -46.30769,46.30769c0,25.50541 20.80228,46.30769 46.30769,46.30769c25.50541,0 46.30769,-20.80228 46.30769,-46.30769c0,-25.50541 -20.80228,-46.30769 -46.30769,-46.30769zM86,52.92308c18.34736,0 33.07692,14.72957 33.07692,33.07692c0,18.34736 -14.72956,33.07692 -33.07692,33.07692c-18.34735,0 -33.07692,-14.72956 -33.07692,-33.07692c0,-18.34735 14.72957,-33.07692 33.07692,-33.07692z"></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                </li>
              </div>
              <div class="col">
                <li>
                  <a class="grey-text text-lighten-3" href="https://github.com/didapatria">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                      <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g fill="#ffffff">
                          <path d="M78.11667,15.05c-32.96667,3.58333 -59.48333,30.1 -63.06667,62.35c-4.3,35.83333 17.91667,66.65 49.45,76.68333v-16.48333c0,0 -2.86667,0.71667 -6.45,0.71667c-10.03333,0 -14.33333,-8.6 -15.05,-13.61667c-0.71667,-2.86667 -2.15,-5.01667 -4.3,-7.16667c-2.15,-0.71667 -2.86667,-0.71667 -2.86667,-1.43333c0,-1.43333 2.15,-1.43333 2.86667,-1.43333c4.3,0 7.88333,5.01667 9.31667,7.16667c3.58333,5.73333 7.88333,7.16667 10.03333,7.16667c2.86667,0 5.01667,-0.71667 6.45,-1.43333c0.71667,-5.01667 2.86667,-10.03333 7.16667,-12.9c-16.48333,-3.58333 -28.66667,-12.9 -28.66667,-28.66667c0,-7.88333 3.58333,-15.76667 8.6,-21.5c-0.71667,-1.43333 -1.43333,-5.01667 -1.43333,-10.03333c0,-2.86667 0,-7.16667 2.15,-11.46667c0,0 10.03333,0 20.06667,9.31667c3.58333,-1.43333 8.6,-2.15 13.61667,-2.15c5.01667,0 10.03333,0.71667 14.33333,2.15c9.31667,-9.31667 20.06667,-9.31667 20.06667,-9.31667c1.43333,4.3 1.43333,8.6 1.43333,11.46667c0,5.73333 -0.71667,8.6 -1.43333,10.03333c5.01667,5.73333 8.6,12.9 8.6,21.5c0,15.76667 -12.18333,25.08333 -28.66667,28.66667c4.3,3.58333 7.16667,10.03333 7.16667,16.48333v23.65c29.38333,-9.31667 50.16667,-36.55 50.16667,-68.08333c0,-43 -36.55,-76.68333 -79.55,-71.66667z"></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                </li>
              </div>
              <div class="col">
                <li>
                  <a class="grey-text text-lighten-3" href="https://id.pinterest.com/didapatria">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;">
                      <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g fill="#ffffff">
                          <path d="M86,1.24038c-46.79868,0 -84.75962,37.96094 -84.75962,84.75962c0,35.86779 22.30108,66.46394 53.77584,78.84195c-0.12921,-2.89423 -0.12921,-17.90805 10.3107,-62.69111c1.39544,-14.93629 -0.54267,-20.23377 -0.54267,-26.43569c0,-14.08354 7.3131,-17.05529 11.60276,-17.05529c6.09856,0 14.49699,2.32572 14.49699,12.14543c0,11.24099 -9.17367,14.21274 -9.17367,14.21274c0,0 -0.64604,2.86838 -1.42128,10.85337c-0.7494,8.01081 2.45493,16.69351 15.50481,16.69351c20.93149,0 24.16166,-29.07151 24.16166,-37.08233c0,-11.03425 -8.08835,-33.46454 -33.23197,-33.46454c-33.51622,0 -39.27885,30.02764 -39.27885,38.03846c0,3.4369 0.93029,9.48377 1.57632,12.0679c6.33113,1.03365 5.6851,9.69051 2.97176,12.14544c-2.9976,2.71334 -18.47656,5.94351 -18.47656,-28.01202c0,-32.32753 28.8131,-48.99519 54.11178,-48.99519c24.08413,0 50.28726,16.61599 50.28726,48.60757c0,28.58053 -20.51803,51.0625 -42.09555,51.0625c-12.94651,0 -19.82031,-10.67247 -19.82031,-10.67247c0,10.0006 -18.34735,44.31791 -20.69892,48.6851c9.53546,3.69531 19.87199,5.8143 30.69952,5.8143c46.82452,0 84.75962,-37.9351 84.75962,-84.75962c0,-46.82452 -37.96094,-84.75962 -84.75962,-84.75962z"></path>
                        </g>
                      </g>
                    </svg>
                  </a>
                </li>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <footer class="font20">
    <div class="footer-copyright">
      <div class="container center-align">
        &copy; 2020 - didapatria
      </div>
    </div>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <!--Custom Js-->
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/script2.js"></script>
</body>

</html>