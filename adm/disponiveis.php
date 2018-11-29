<?php
include("url_adm.php");
include("../db/dbconnect.php");

//consultar no banco de dados
$sql = "SELECT * FROM suite where ocupado = 'N';";

$result = mysqli_query($conexao, $sql);

//Verificar se encontrou resultado na tabela "suite"
if(($result) AND ($result->num_rows != 0)){
	?>
	<br>
    <div class= "container">
	<table class="table table-sm table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Número</th>
				<th>Tipo</th>
				<th>Ocupado</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row = mysqli_fetch_assoc($result)){
				?>
				<tr>
					<th><?php echo $row['numero']; ?></th>
					<td><?php echo $row['tipo']; ?></td>
					<td><?php echo $row['ocupado']; ?></td>
				</tr>
				<?php
			}?>
		</tbody>
	</table>
    </div>
<?php
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum quarto encontrado!</div>";
}
