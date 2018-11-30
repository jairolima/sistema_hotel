<?php 

    session_start();
    $disponiveis='disponiveis.php';
    $fazer_reserva='fazer_reserva.php';
    $logout='logout.php';
    $ocupados='ocupados.php';

    include("bootstrap_css.php");
    include("menu_adm.php");

    if(!isset($_SESSION['usuario'])) {
        header("location:login_pg.php");
     }
    
?> 