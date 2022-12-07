<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:loginPage.php?message=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Praktikum IF | 123210061</a>
        </div>
        <a href="logout.php" class="nav-link end-10 me-3 text-secondary">Logout</a>
    </nav>
    <div class="text-light" style="margin-top: 200px;">
        <center>
            <h6>
                Selamat datang di
            </h6>
            <h1>
                Praktikum Informatika
            </h1>
        </center>
    </div>
    <br>
    <br>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-4">
                <a href="lab.php">
                    <button type="button" class="btn btn-outline-light" style="width: 400px;">Lab</button>
                </a>
            </div>
            <div class="col-4">
                <a href="waktuPraktikum.php">
                    <button type="button" class="btn btn-outline-light" style="width: 400px;">Waktu Praktikum</button>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="container text-center">
        <a href="jadwalPraktikum.php">
            <button type="button" class="btn btn-outline-light" style="width: 840px;">Jadwal Praktikum</button>
        </a>
    </div>
</body>

</html>