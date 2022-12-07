<?php
include 'connection.php';

$mk        = $_POST['mk_praktikum'];
$jurusan    = $_POST['jurusan'];
$id_lab = $_POST['lab'];
$id_waktu = $_POST['waktu'];

$sql    = "INSERT INTO jadwal VALUES('', '$mk', '$jurusan','$id_lab','$id_waktu')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:jadwalPraktikum.php?message=jadwal_success");
} else {
    header("location:jadwalPraktikum.php?message=jadwal_fail");
}
