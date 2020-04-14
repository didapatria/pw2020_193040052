<?php
  // menghubungkan dengan file php lainnya
  require 'php/functions.php';

  // melakukan query
  $makanan = query("SELECT * FROM makanan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
</head>
<body>
    <div class="container">
        <?php foreach ($makanan as $makan) { ?>
          <p class="nama">
            <a href="php/detail.php?id=<?php echo $makan['id']?>">
              <?php echo $makan["nama_makanan"]?>
            </a>
          </p>
        <?php } ?>
    </div>
</body>
</html>