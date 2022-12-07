<!DOCTYPE html>
<html>

<head>
    <title>CREATE</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <center class="margin text-light">
        <div class="fontSize">
            REGISTER
        </div>
        <br>
        <form method="post" action="register_proses.php">
            <div>
                <input type="number" class="form-control bg-dark text-light" id="nim" aria-describedby="nim" name="nim" placeholder="Masukkan NIM">
            </div>
            <div class="mb-3 mt-3">
                <input type="text" class="form-control bg-dark text-light" id="username" aria-describedby="username" name="username" placeholder="Masukkan Username">
            </div>
            <div class="mb-3 mt-3">
                <input type="password" class="form-control bg-dark text-light" id="password" name="password" placeholder="Masukkan Password">
            </div>
            <br>
            <button type="submit" class="btn btn-outline-light buttonSize" name="" value="REGISTER">REGISTER</button>
        </form>
    </center>
</body>

</html>