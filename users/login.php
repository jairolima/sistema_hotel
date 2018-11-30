<?php

include("bootstrap_css.php");
include("../db/dbconnect.php");

if(isset($_POST['cpf']) && isset($_POST['senha'])) {

	$cpf=$_POST['cpf'];
	$senha=$_POST['senha'];

    $sql="SELECT * FROM hospede WHERE CPF='$cpf' AND senha='$senha' ";
    
	$result=mysqli_query($conexao , $sql);

	if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['usuario'] = $row['nome'];
        $_SESSION['cpf'] = $row['CPF'];
        $_SESSION['senha'] = $row['senha'];
        $_SESSION['email'] = $row['email'];

        header("location:index.php");
        
	} else {
        echo "
        <br>
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
