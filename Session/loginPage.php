<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <center class="margin text-light">
        <div class="fontSize">
            Login Page
        </div>
        <hr>
        <?php
        if (isset($_GET['message'])) {
            if ($_GET['message'] == "gagal") {
                echo "Login Gagal. Username atau Password Salah";
            } elseif ($_GET['message'] == "logout") {
                echo "Anda telah berhasil logout";
            } elseif ($_GET['message'] == "belum_login") {
                echo "Anda harus login terlebih dahulu untuk mengakses halaman admin";
            }
            else if($_GET['message'] == "register_success"){
                echo "Registrasi Berhasil.";
            }
            else if($_GET['message'] == "register_fail"){
                echo "Registrasi Gagal.";
            }
        }
        ?>
        <br>
        <br>
        <form method="post" action="login_proses.php">
            <div>
                <input type="text" class="form-control bg-dark text-light" id="username" aria-describedby="username" name="username" placeholder="Masukkan Username">
            </div>
            <div class="mb-3 mt-3">
                <input type="password" class="form-control bg-dark text-light" id="password" name="password" placeholder="Masukkan Password">
            </div>
            <br>
            <button type="submit" class="btn btn-outline-light buttonSize" name="" value="LOGIN">LOGIN</button>
        </form>
        <br>
        Belum punya akun?
        <a href="register.php" class="text-light">Daftar di sini.</a>
    </center>
</body>

</html>