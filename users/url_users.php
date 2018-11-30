<?php 

    session_start();
    $index='index.php';
    $fazer_reserva='fazer_reserva.php';
    $historico='historico.php';
    $logout='logout.php';
    $contato='contato.php';

    include("bootstrap_css.php");
    include("menu_user.php");

    if(!isset($_SESSION['usuario'])) {
        header("location:login_pg.php");
     }
    
?> 