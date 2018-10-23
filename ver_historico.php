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
    <div class='container'>
        <h3>Suas Estadias:</h3>
        <br><input class='btn btn-primary btn-lg' type='button' value='Voltar' onclick='history.go(-1)' />
    </div>
    <?php

        $conexao = mysqli_connect("localhost", "root", "", "hotel_mv");

        $cpf_usuario = $_POST['cpf'];  

        $sql = "select * from estadia where CPF_H='$cpf_usuario';";

        $result = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "
                <div class='container'>
                <h5>------------------------------------<br>Data de Chegada: " . $row["dataC"]. " <br>Data de Saída: " . $row["dataS"]
                . " <br>Quantidade de Pessoas: " . $row["adulto"]. " <br>Crianças: " . $row["crianca"]. 
                " <br>CPF: " . $row["CPF_H"]. " <br>Nome : " . $row["nome_H"]. "</h5><br>
                </div>
                ";
            }
        } else {
            echo "
            <div class='container'>
            <br><h5>0 resultados</h5>
            </div>
            ";
        }
        
        mysqli_close($conexao);

    ?>
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>