<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="tugasCSS.css">
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="#">NMIXX</a>
            <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-warning"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-info" href="home_page.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="form_page.html">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page" href="home_page.html">Tools</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mx-5">
        <form action="tools_result.php" method="post">
            <center class="text-warning title">
                KPK dan FPB
            </center>
            <br>
            <div class="text-warning">
                <label for="number1" class="form-label">Input Number 1</label>
                <input type="number" class="form-control" id="number1" name="number1">
                <div id="number1" class="form-text"></div>
            </div>
            <div class="text-warning">
                <label for="number2" class="form-label">Input Number 2</label>
                <input type="number" class="form-control" id="number2" name="number2">
            </div>
            <br>
            <button type="submit" class="btn btn-outline-warning text-warning">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>