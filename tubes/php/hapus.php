<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tida ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

//ambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'data_masakan.php';
          </script>";
} else {
  echo "<script>
            alert('Data Gagal Dihapus!');
          </script>";
}
