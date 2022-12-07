<?php
include 'connection.php';


$lab        = $_POST['lab'];

$sql    = "INSERT INTO lab VALUES('','$lab')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:lab.php?message=lab_success");
} else {
    header("location:lab.php?message=lab_fail");
}
