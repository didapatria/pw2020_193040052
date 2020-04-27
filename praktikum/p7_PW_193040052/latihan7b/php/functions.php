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

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $foto = htmlspecialchars($data['foto']);
    $porsi = htmlspecialchars($data['porsi']);
    $bahan = $data['bahan'];
    $caramasak = $data['caramasak'];

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
    mysqli_query($conn, "DELETE FROM foods WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $foto = htmlspecialchars($data['foto']);
    $porsi = htmlspecialchars($data['porsi']);
    $bahan = $data['bahan'];
    $caramasak = $data['caramasak'];

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
