
<?php 

include("url_users.php");
include("../db/dbconnect.php");

$nome = $_REQUEST["nome"];
$cpf = $_REQUEST["cpf"];
$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];

$_SESSION['usuario'] = $nome;
$_SESSION['cpf'] = $cpf;
$_SESSION['senha'] = $senha;

$sql = "insert into hospede(CPF, nome, senha, email) 
values('$cpf', '$nome', '$senha', '$email');";

mysqli_query($conexao, $sql);    

mysqli_close($conexao);

if(isset($_SESSION['usuario'])) {
    header("location:index.php");
}

?>