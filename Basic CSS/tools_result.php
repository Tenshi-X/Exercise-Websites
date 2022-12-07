<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Tools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="tugasCSS.css">
</head>

<body class="bg-warning">
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
                        <a class="nav-link active text-warning" aria-current="page" href="tools_page.php">Tools</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container px-5 text-center p-5">
        <div class="row gx-5">
            <div class="col">
                <div class="bg-dark text-white result">
                    KPK
                    <br>
                    <?php
                    $number_1 = $_POST['number1'];
                    $number_2 = $_POST['number2'];

                    $result = $number_1;
                    while ($result % $number_2 != 0) {
                        $result = $result + $number_1;
                    }
                    echo $result;
                    ?>
                </div>
            </div>
            <div class="col">
                <div class="bg-dark text-white result">
                    FPB
                    <br>
                    <?php
                    $number_1 = $_POST['number1'];
                    $number_2 = $_POST['number2'];

                    while ($number_1 != $number_2) {
                        if ($number_1 > $number_2) {
                            $number_1 = $number_1 - $number_2;
                        } else {
                            $number_2 = $number_2 - $number_1;
                        }
                    }
                    echo $number_1;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <center>
        <form action="tools_page.php">
            <button type="submit" class="btn btn-dark btn-lg text-white">Back</button>
        </form>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>