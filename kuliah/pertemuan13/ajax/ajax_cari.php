<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>
<div class="row">
  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style: italic">Data Mahasiswa Tidak Ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php foreach ($mahasiswa as $m) : ?>
    <div class="col s3 m3">
      <div class="card small" style="height: 500px">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/<?= $m['gambar']; ?>">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"><?= $m['nama'] ?><i class="material-icons right">more_vert</i></span>
          <p><a href="detail.php?id=<?= $m['id'] ?>" class="waves-effect waves-light btn-small">Detail</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"><?= $m['nama'] ?><i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>