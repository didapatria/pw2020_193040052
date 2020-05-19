<?php
// menghubungkan dengan file php lainnya
require '../php/functions.php';
$foods = keyword($_GET['keyword']);
?>
<div class="row">
  <div class="row resep-list">
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
                  <img class="activator img-cover" src="../assets/img/<?= $food['foto'] ?>">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4"><?= $food['nama'] ?></span>
                </div>
                <div class="card-action">
                  <a href="detail.php?id=<?= $food['id'] ?>">Detail</a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>