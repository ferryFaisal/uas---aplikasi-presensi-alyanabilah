<?php
require "connect_db.php";

$id1 = $_GET['id'];

$sql1 = "UPDATE mahasiswa SET nim='$nim1',
nama='$nama1',
kelas='$class1'
WHERE id ='$id1'";

if (mysqli_query($conn, $sql1)) {

    header('Location: tables-mahasiswa.php');
    ob_end_flush();

} else {
    echo "gagal mengedit data: " . mysqli_error($conn);
}

mysqli_close($conn);
//test
