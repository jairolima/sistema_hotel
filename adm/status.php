<?php
//session_start();
include_once("../db/dbconnect.php");

$num = $_GET['id'];

if(!empty($num)){

    $sql = "update suite set='N' WHERE numero='$num'";
    
    $result = mysqli_query($conexao, $sql);
    
	if(mysqli_affected_rows($conexao)){
		$_SESSION['usuario'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: index.php");
	}else{
		
		$_SESSION['usuario'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: index.php");
	}
}else{	
	$_SESSION['usuario'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: index.php");
}
