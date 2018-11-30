<?php
    include("url_users.php");
    include("../db/dbconnect.php");
    if(!isset($_SESSION['usuario'])) {
        header("location:login_pg.php");
    }
    
?>

<br>
<div class="container">
    <div class="jumbotron">
        <h2>Suas estadias</h2> 
        <h5 class="text-primary" >Aqui está seu histórico de hospedagens!</h5><br>
        <?php
            $cpf = $_SESSION['cpf'];

            $query = "select * from estadia where CPF_H='$cpf' order by idE desc;";

            $result = mysqli_query($conexao, $query);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "
                        <div class='container'>
                        <h5>------------------------------------<br>Data de Chegada: " . $row["dataC"]. " <br>Data de Saída: " . $row["dataS"]
                        . " <br>Quantidade de Pessoas: " . $row["adulto"]. " <br>Crianças: " . $row["crianca"]. 
                        " <br>CPF: " . $row["CPF_H"]. " <br>Nome : " . $row["nome_H"]. " <br>Suíte: " . $row["suite_H"]. "</h5><br>
                        </div>
                    ";
                }
            } else {
                echo "
                    <div class='container'>
                    <br><h5>Você ainda não se hospedou conosco!</h5>
                    </div>
                ";
            }     
        ?>
    </div> 
</div>