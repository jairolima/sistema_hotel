<?php
session_start();

include("url_users.php");
include("../db/dbconnect.php");

if(isset($_POST['nome']) && isset($_POST['senha'])) {

	$nome=$_POST['nome'];
	$senha=$_POST['senha'];


    $sql="SELECT * FROM hospede WHERE nome='$nome' AND senha='$senha' ";
    
	$result=mysqli_query($conexao , $sql);

	if(mysqli_num_rows($result) == 1) {
        
        $_SESSION['usuario'] = $nome;
		//$_SESSION['senha']=$senha;

        header("location:index.php");
        
	} else {
        echo "
        <div class='container'>
            <div class='alert alert-danger' role='alert'>
                Usuário ou senha incorreto!
            </div>
        </div>
		";
	}
} else {
	if(!isset($_SESSION['usuario'])) {
	    echo "
        <div class='container'>
            <div class='alert alert-danger' role='alert'>
                Você precisa fazer login!
            </div>
        </div>
			";
	} else {
		header("location:../index.php");
	}
}
?>
