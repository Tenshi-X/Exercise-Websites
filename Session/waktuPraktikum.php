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
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Praktikum IF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="homePage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="lab.php">Lab</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="waktuPraktikum.php">Waktu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="jadwalPraktikum.php">Jadwal</a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="logout.php" class="nav-link end-10 me-3 text-secondary">Logout</a>
    </nav>
    <center class="text-light">
        <?php
        if (isset($_GET['message'])) {
            if ($_GET['message'] == "time_success") {
                echo "Waktu Berhasil Ditambahkan";
            } elseif ($_GET['message'] == "time_fail") {
                echo "Waktu Gagal Ditambahkan";
            } elseif ($_GET['message'] == "deleteTime_fail") {
                echo "Waktu Gagal Dihapus";
            }
        }
        ?>
    </center>
    <div class="container text-center" style="margin-top: 100px;">
        <div class="row justify-content-around">
            <div class="col-4"">
                <table class=" table">
                <thead class="text-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Lab</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                include('connection.php');

                $sql    = "SELECT * FROM waktu";
                $query    = mysqli_query($connect, $sql);
                $i = 1;
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tbody class="text-light">
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $data['waktu_mulai']; ?>-<?= $data['waktu_selesai']; ?></td>
                            </td>
                            <td>
                                <a href="waktu_hapus.php?id_waktu=<?= $data['id_waktu']; ?>">
                                    <button class="btn btn-outline-danger">Hapus</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
                </table>
            </div>
            <div class="col-4" style="margin-top: 10px;">
                <h2 class="text-light">
                    Input Waktu Praktikum
                </h2>
                <hr style="color: white;">
                <h6 class="text-light">
                    Masukkan Waktu Pelaksanaan Praktikum.
                </h6>
                <center style="margin-top: 125px;">
                    <form action="waktu_proses.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                <label for="Mulai" class="text-light">Mulai</label>
                                <div class="mb-3">
                                    <input type="time" class="form-control bg-dark text-light" id="waktu_mulai" name="waktu_mulai">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="Selesai" class="text-light">Sampai</label>
                                <div class="mb-3">
                                    <input type="time" class="form-control bg-dark text-light" id="waktu_selesai" name="waktu_selesai">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-outline-light" name="tambah_waktu" style="width: 415px;">Submit</button>
                    </form>
                </center>
            </div>
        </div>

</body>

</html>