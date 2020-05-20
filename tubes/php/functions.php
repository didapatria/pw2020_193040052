<?php
// funtion untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040052") or die("Database salah");

  return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }


  return $rows;
}

function upload()
{
  $nama_file = $_FILES['foto']['name'];
  $tipe_file = $_FILES['foto']['type'];
  $ukuran_file = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmp_file = $_FILES['foto']['tmp_name'];

  // ketika tidak ada foto yang dipilih
  if ($error == 4) {
    // echo "<script>
    //         alert('pilih foto terlebih dahulu!');
    //       </script>";
    return 'default.jpg';
  }

  // cek ekstensi file
  $daftar_foto = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_foto)) {
    echo "<script>
            alert('yang anda pilih bukan foto!');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan foto!');
          </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 20Mb == 20000000
  if ($ukuran_file > 20000000) {
    echo "<script>
            alert('ukuran terlalu besar!');
          </script>";
    return false;
  }

  // lolos pengecekan
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../assets/img/galeri/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  // $foto = htmlspecialchars($data['foto']);
  $porsi = htmlspecialchars($data['porsi']);
  $bahan = $data['bahan'];
  $caramasak = $data['caramasak'];

  // upload foto
  $foto = upload();
  if (!$foto) {
    return false;
  }

  $query = "INSERT INTO
                    foods
                VALUES
                (null, '$nama', '$foto', '$porsi', '$bahan', '$caramasak');
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  // menghapus foto di folder img
  $foods = query("SELECT * FROM foods WHERE id = $id")[0];
  if ($foods['foto'] != 'default.jpg') {
    unlink('../assets/img/galeri/' . $foods['foto']);
  }

  mysqli_query($conn, "DELETE FROM foods WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $foto_lama = htmlspecialchars($data['foto_lama']);
  $porsi = htmlspecialchars($data['porsi']);
  $bahan = $data['bahan'];
  $caramasak = $data['caramasak'];

  $foto = upload();
  if (!$foto) {
    return false;
  }

  if ($foto == 'default.jpg') {
    $foto = $foto_lama;
  }

  $queryubah = "UPDATE foods
                SET
                nama = '$nama',
                foto = '$foto',
                porsi = '$porsi',
                bahan = '$bahan',
                caramasak = '$caramasak'
            WHERE id = '$id' ";
  mysqli_query($conn, $queryubah) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function keyword($keyword)
{
  $conn = koneksi();
  $query = "SELECT * FROM foods 
                WHERE
                nama LIKE '%$keyword%' OR
                porsi LIKE '%$keyword%' OR
                bahan LIKE '%$keyword%' OR
                caramasak LIKE '%$keyword%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function keyword2($keyword2)
{
  $conn = koneksi();
  $query = "SELECT * FROM foods 
                WHERE
                nama LIKE '%$keyword2%' OR
                porsi LIKE '%$keyword2%' OR
                bahan LIKE '%$keyword2%' OR
                caramasak LIKE '%$keyword2%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
                alert('username sudah digunakan');
            </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user baru
  $query_tambah = "INSERT INTO user VALUES(null, '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
