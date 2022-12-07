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
    <title>Edit Jadwal</title>
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
                        <a class="nav-link text-white-50" href="waktuPraktikum.php">Waktu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="jadwalPraktikum.php">Jadwal</a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="logout.php" class="nav-link end-10 me-3 text-secondary">Logout</a>
    </nav>
    <center>
        <div class="col-4" style="margin-top: 75px;">
            <h2 class="text-light">
                Ubah Jadwal Praktikum
            </h2>
            <hr style="color: white;">
            <h6 class="text-light">
                Buat jadwal praktikum sesuai dengan yang diinginkan.
            </h6>
            <br>
            <br>
            <form action="jadwal_edit.php" method="post">
                <?php
                include('connection.php');
                $id_jadwal = $_GET['id_jadwal'];
                $sql    = "SELECT * FROM jadwal INNER JOIN lab on jadwal.id_lab = lab.id_lab INNER JOIN waktu on jadwal.id_waktu = waktu.id_waktu WHERE id_jadwal=$id_jadwal";
                $query    = mysqli_query($connect, $sql);
                $data = mysqli_fetch_array($query);
                ?>
                <div class="row">
                    <div class="col-7">
                        <div class="mb-3">
                            <input type="text" class="form-control bg-dark text-light" id="mk" name="mk_praktikum" value="<?= $data['mk'] ?>" placeholder="Masukkan MK Praktikum">
                        </div>
                    </div>
                    <div class="col-5">
                        <table>
                            <input class="form-check-input" type="hidden" name="id_jadwal" id="id_jadwal" value="<?= $data['id_jadwal'] ?>">
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jurusan" id="IF" value="IF" <?= $data["jurusan"] == "IF" ? "checked" : "" ?>>
                                        <label class="form-check-label text-light" for="flexRadioDefault1">
                                            IF
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jurusan" id="SI" value="SI" <?= $data["jurusan"] == "SI" ? "checked" : "" ?>>
                                        <label class="form-check-label text-light" for="flexRadioDefault2">
                                            SI
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <select class="form-select bg-dark text-light" id="lab" name="lab">
                            <?php
                            include('connection.php');

                            $sql    = "SELECT * FROM lab";
                            $query    = mysqli_query($connect, $sql);
                            while ($lab = mysqli_fetch_array($query)) {
                            ?>
                                <option value=<?= $lab['id_lab']; ?> <?= $data["id_lab"] == $lab["id_lab"] ? "selected" : "" ?>><?= $lab['lab']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <select class="form-select bg-dark text-light" id="waktu" name="waktu">
                            <?php
                            include('connection.php');

                            $sql    = "SELECT * FROM waktu";
                            $query    = mysqli_query($connect, $sql);
                            while ($waktu = mysqli_fetch_array($query)) {
                            ?>
                                <option value=<?= $waktu['id_waktu']; ?> <?= $data["id_waktu"] == $waktu["id_waktu"] ? "selected" : "" ?>><?= $waktu['waktu_mulai']; ?>-<?= $waktu['waktu_selesai']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <div>
                    <button type="submit" class="btn btn-outline-light" name="edit_jadwal" style="width: 400px;">Submit</button>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-outline-light" name="reset_jadwal" style="width: 400px;" disabled>Reset</button>
                </div>
            </form>
    </center>
</body>

</html>