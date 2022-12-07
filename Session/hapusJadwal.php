<?php
include "connection.php";
$id_jadwal = $_GET['id_jadwal'];
$query = mysqli_query($connect, "DELETE FROM jadwal WHERE id_jadwal=$id_jadwal");

if ($query) {
    header("location:jadwalPraktikum.php?message=berhasilHapus");
} else {
    header("location:jadwalPraktikum.php?message=gagalHapus");
}
