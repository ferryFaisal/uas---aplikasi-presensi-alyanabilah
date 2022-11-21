<?php
require 'connect_db.php';

// session_start();
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$class = $_POST['kelas'];

$sql = "INSERT INTO mahasiswa (nim, nama, kelas)
    VALUES ('$nim',
    '$nama',
    '$class'
    )";

if (mysqli_query($conn, $sql)) {
    echo "data berhasil dimasukkan ke database";

    header('Location: tables-mahasiswa.php');
    ob_end_flush();

} else {
    echo "gagal memasukkan data: " . mysqli_error($conn);
}

mysqli_close($conn);
