<?php
include 'connection.php';

$id_user        = $_POST['nim'];
$username        = $_POST['username'];
$password    = $_POST['password'];

$sql    = "INSERT INTO user VALUES('$id_user', '$username', '$password')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:loginPage.php?message=register_success");
} else {
    header("location:loginPage.php?message=register_fail");
}
