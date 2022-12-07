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
    <div class="text-light">
      <?php
      if (isset($_GET['message'])) {
        if ($_GET['message'] == "berhasilHapus") {
          echo "Jadwal Berhasil Dihapus";
        } elseif ($_GET['message'] == "gagalHapus") {
          echo "Jadwal Gagal Dihapus";
        }
        if ($_GET['message'] == "jadwal_success") {
          echo "Jadwal Berhasil Ditambahkan";
        } elseif ($_GET['message'] == "jadwal_fail") {
          echo "Jadwal Gagal Ditambahkan";
        } elseif ($_GET['message'] == "edit_fail") {
          echo "Jadwal Gagal Diedit";
        }
      }
      ?>
    </div>
  </center>
  <div class="container text-center" style="margin-top: 100px;">
    <div class="row justify-content-around">
      <div class="col-4"">
                <table class=" table">
        <thead class="text-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">MK Praktikum</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Lab</th>
            <th scope="col">Waktu</th>
            <th colspan="1">Action</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <?php
        include('connection.php');

        $sql    = "SELECT * FROM jadwal INNER JOIN lab on jadwal.id_lab = lab.id_lab INNER JOIN waktu on jadwal.id_waktu = waktu.id_waktu";
        $query    = mysqli_query($connect, $sql);
        $i = 1;
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <tbody class="text-light">
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $data['mk']; ?></td>
              <td><?= $data['jurusan']; ?></td>
              <td><?= $data['lab']; ?></td>
              <td><?= $data['waktu_mulai']; ?>-<?= $data['waktu_selesai']; ?></td>
              <td>
                <a href="editJadwal.php?id_jadwal=<?= $data['id_jadwal']; ?>">
                  <button class="btn btn-outline-light">Edit</button>
                </a>
              </td>
              <td>
                <a href="hapusJadwal.php?id_jadwal=<?= $data['id_jadwal']; ?>">
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
          Input Jadwal Praktikum
        </h2>
        <hr style="color: white;">
        <h6 class="text-light">
          Buat jadwal praktikum sesuai dengan yang diinginkan.
        </h6>
        <br>
        <br>
        <form action="jadwal_proses.php" method="post">
          <div class="row">
            <div class="col-7">
              <div class="mb-3">
                <input type="text" class="form-control bg-dark text-light" id="mk" name="mk_praktikum" placeholder="Masukkan MK Praktikum">
              </div>
            </div>
            <div class="col-5">
              <table>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jurusan" id="IF" value="IF">
                      <label class="form-check-label text-light" for="flexRadioDefault1">
                        IF
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jurusan" id="SI" value="SI">
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
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <option value=<?= $data['id_lab']; ?>><?= $data['lab']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="mt-3">
              <select class="form-select bg-dark text-light" id="waktu" name="waktu">
                <?php
                include('connection.php');

                $sql    = "SELECT * FROM waktu";
                $query    = mysqli_query($connect, $sql);
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <option value=<?= $data['id_waktu']; ?>><?= $data['waktu_mulai']; ?>-<?= $data['waktu_selesai']; ?></option>

                <?php } ?>
              </select>
            </div>
          </div>
          <br>
          <br>
          <div class="row justify-content-center">
            <div class="col-6">
              <button type="submit" class="btn btn-outline-light" name="tambah_jadwal" style="width: 200px;">Submit</button>
            </div>
            <div class="col-6">
              <button type="submit" class="btn btn-outline-secondary" name="reset_jadwal" style="width: 200px;" disabled>Reset</button>
            </div>
          </div>
      </div>
      </form>

    </div>
</body>

</html>