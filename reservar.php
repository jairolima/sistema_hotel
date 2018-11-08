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

    $conexao = mysqli_connect("localhost", "root", "", "hotel_mv");

    $chegada = $_REQUEST["chegada"];
    $saida = $_REQUEST["saida"];
    $adulto = $_REQUEST["adulto"];
    $crianca = $_REQUEST["crianca"];
    $idade = $_REQUEST["idade"];
    $tipo = $_REQUEST["tipo"];
    $nome = $_REQUEST["nome"];
    $cpf = $_REQUEST["cpf"];
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];


    if(!$conexao) {
        echo "<h3>Erro na conexão com o banco de dados!</h3>";
        "Error: " . mysqli_error($conexao);
    } else {
        $sqlH = "insert into hospede(CPF, nome, senha, email) 
        values('$cpf', '$nome', '$senha', '$email');";
        mysqli_query($conexao, $sqlH);
        
        $sqlS = "update suite
        set ocupado = 'S'  
        where tipo = '$tipo' and ocupado <> 'S' limit 1;";

        mysqli_query($conexao, $sqlS);

        $sql = "insert into estadia(dataC, dataS, adulto, crianca, idadeCC, CPF_H, nome_H, suite_H)
        values('$chegada', '$saida', '$adulto', '$crianca', '$idade', '$cpf', '$nome', '$tipo');";
        
        mysqli_query($conexao, $sql);

        echo "
        <div class='container'>
        <h3>Reserva concluída!</h3>
        <br><input class='btn btn-primary btn-lg' type='button' value='Voltar' onclick='history.go(-1)' />
        <div>
        ";
    }

        mysqli_close($conexao);

    ?>

    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>