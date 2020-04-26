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
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM foods WHERE id = $id");

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
    mysqli_query($conn, $queryubah);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
