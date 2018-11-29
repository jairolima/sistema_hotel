<?php

session_start();
session_destroy();

printf("Sucesso");

header("location:login_pg.php");

?>
