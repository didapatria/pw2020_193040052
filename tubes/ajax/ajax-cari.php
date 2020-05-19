<?php
// menghubungkan dengan file php lainnya
require '../php/functions.php';
$foods = keyword($_GET['keyword']);
?>
<section class="resep">
  <section class="food-list latest">
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="mt-0">
            Resep Populer
          </h4>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <?php if (empty($foods)) : ?>
            <div class="row">
              <div class="col s7">
                <h4 class="mt-0">
                  Data Tidak Ditemukan
                </h4>
              </div>
            </div>
          <?php else : ?>
            <div class="row">
              <?php foreach ($foods as $food) : ?>
                <div class="col s3">
                  <div class="card small">
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
          <?php if (empty($foods)) : ?>
            <div class="row">
              <div class="col s7">
                <h4 class="mt-0">
                  Data Tidak Ditemukan
                </h4>
              </div>
            </div>
          <?php else : ?>
            <div class="row">
              <?php foreach ($foods as $food) : ?>
                <div class="col s3">
                  <div class="card small">
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