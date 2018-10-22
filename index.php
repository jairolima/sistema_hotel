<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Hotel Mar Vermelho</title>
</head>

<body>
    
    <?php 

    include_once("menu.php");

    if (empty($_SERVER["QUERY_STRING"])) {
        $var = "main.php";
        include_once("$var");
    } else {
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once("rodape.php");

    ?>

    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>