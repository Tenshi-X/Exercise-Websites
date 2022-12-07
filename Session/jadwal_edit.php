<?php
include "connection.php";
$id_jadwal = $_POST['id_jadwal'];
$matkul = $_POST['mk_praktikum'];
$jurusan = $_POST['jurusan'];
$id_lab = $_POST['lab'];
$id_waktu = $_POST['waktu'];

$sql = "UPDATE jadwal SET mk='$matkul', jurusan='$jurusan', id_lab='$id_lab', id_waktu='$id_waktu' WHERE id_jadwal=$id_jadwal";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location:jadwalPraktikum.php");
} else {
    echo "location:jadwalPraktikum.php?message=edit_fail";
}
