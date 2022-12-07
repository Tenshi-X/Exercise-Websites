<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPK & FPB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="form">
    <form class="formMargin" action="result.php" method="post">
        <center class= "text-white title">
            KPK dan FPB
        </center>
        <br>
        <div class="mb-3 text-white">
            <label for="number1" class="form-label">Masukkan Angka ke-1</label>
            <input type="number" class="form-control" id="number1" name="number1">
            <div id="number1" class="form-text"></div>
        </div>
        <div class="mb-3 text-white">
            <label for="number2" class="form-label">Masukkan Angka ke-2</label>
            <input type="number" class="form-control" id="number2" name="number2">
        </div>
        <button type="submit" class="btn btn-outline-light text-white">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>