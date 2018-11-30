<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    header("location:login_pg.php");
}

include_once("../db/dbconnect.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

if(!empty($id)){
    $result_usuario = "update suite set ocupado='N' WHERE numero='$id'";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);
    if(mysqli_affected_rows($conexao)){
        $_SESSION['msg'] = "<p style='color:green;'>Sucesso!</p>";
        header("Location: ocupados.php");
    }else{

        $_SESSION['msg'] = "<p style='color:red;'>Erro a suíte não foi desocupada!</p>";
        header("Location: ocupados.php");
    }
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Clique em Confirmar para desocupar uma suíte!</p>";
    header("Location: ocupados.php");
}
?>