<?php

include("bootstrap_css.php");
include("../db/dbconnect.php");

if(isset($_POST['login']) && isset($_POST['senha'])) {

	$login=$_POST['login'];
	$senha=$_POST['senha'];


    $sql="SELECT * FROM user WHERE login='$login' AND senha='$senha' ";
    
	$result=mysqli_query($conexao , $sql);

	if(mysqli_num_rows($result) == 1) {
        
        session_start();
        $_SESSION['usuario'] = $login;
		//$_SESSION['senha']=$senha;

        header("location:disponiveis.php");
        
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
		header("location:login_og.php");
	}
}
?>
