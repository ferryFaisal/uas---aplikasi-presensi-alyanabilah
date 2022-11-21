<?php
require 'database.php';

$sql = "INSERT INTO presensi (tgl_presensi, makul, kelas, nim, nama, status_presensi)
VALUES ('$_POST[tgl]',
'$_POST[makul]',
'$_POST[kelas]',
'$_POST[nim]',
'$_POST[nama]',
'$_POST[presensi]'";

if (mysqli_query($conn, $sql)) {
    echo "data berhasil dimasukkan ke database";
    header('Location: index.php');
    ob_end_flush();
} else {
    echo "gagal memasukkan data: " . mysqli_error($conn);
}

mysqli_close($conn);
