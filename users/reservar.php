    
    <?php 

    include("url_users.php");
    include("../db/dbconnect.php");
    
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
    
    mysqli_close($conexao);

    ?>