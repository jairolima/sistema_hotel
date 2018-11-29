
<?php 

include("url_users.php");
include("../db/dbconnect.php");

$nome = $_REQUEST["nome"];
$cpf = $_REQUEST["cpf"];
$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];

$sql = "insert into hospede(CPF, nome, senha, email) 
values('$cpf', '$nome', '$senha', '$email');";

mysqli_query($conexao, $sql);    

echo "
    <div class='container'>
    <h3>Cadastro concluído!</h3>
    <br><input class='btn btn-primary btn-lg' type='button' value='Voltar' onclick='history.go(-1)' />
    <div>
";

mysqli_close($conexao);

?>