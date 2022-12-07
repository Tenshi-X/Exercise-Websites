<?php
include "connection.php";
$id_waktu = $_GET['id_waktu'];
$sql = "DELETE FROM waktu WHERE id_waktu=$id_waktu";
$query = mysqli_query($connect, $sql );

if ($query) {
    header("location:waktuPraktikum.php");
} else {
    header("location:waktuPraktikum.php?message=deleteTime_fail");
}
