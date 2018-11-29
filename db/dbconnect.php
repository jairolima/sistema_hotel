<?php

/* Conexão  */
	$conexao = mysqli_connect("localhost","root","","hotel_mv");

	/* Checa conexão */
	if(mysqli_connect_error()) {
		echo "Falha na conexão com DB";
		printf("Error : %s",mysqli_connect_error());
	}

?>
