<?php
include 'connection.php';


$waktu_mulai        = $_POST['waktu_mulai'];
$waktu_selesai        = $_POST['waktu_selesai'];

$sql    = "INSERT INTO waktu VALUES('','$waktu_mulai','$waktu_selesai')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:waktuPraktikum.php?message=time_success");
} else {
    header("location:waktuPraktikum.php?message=time_fail");
}
