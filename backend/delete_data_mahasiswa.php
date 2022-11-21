<?php
require 'connect_db.php';
session_start();

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "Data deleted successfully";

    header('Location: tables-mahasiswa.php');
    ob_end_flush();

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
//test
