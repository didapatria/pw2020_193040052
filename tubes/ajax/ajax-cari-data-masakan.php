<?php
// menghubungkan dengan file php lainnya
require '../php/functions.php';
$foods = keyword($_GET['keyword']);

?>
<div class="row data-masakan">
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
    </div>
  </div>
</div>