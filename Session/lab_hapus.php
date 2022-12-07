<?php
include "connection.php";
$id_lab = $_GET['id_lab'];
$sql = "DELETE FROM lab WHERE id_lab=$id_lab";
$query = mysqli_query($connect, $sql );

if ($query) {
    header("location:lab.php");
} else {
    header("location:lab.php?message=deleteLab_fail");
}
