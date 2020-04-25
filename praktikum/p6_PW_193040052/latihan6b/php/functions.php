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
    $bahan = htmlspecialchars($data['bahan']);
    $caramasak = htmlspecialchars($data['caramasak']);

    $query = "INSERT INTO
                    foods
                VALUES
                (null, '$nama', '$foto', '$porsi', '$bahan', '$caramasak');
            ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
