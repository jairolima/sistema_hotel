<?php
    include("url_users.php");
    include("../db/dbconnect.php");
    if(!isset($_SESSION['usuario'])) {
       header("location:login_pg.php");
    }
    

    $nome = $_SESSION['usuario'];

    $query = "select * from hospede where nome='$nome';";

    $result = mysqli_query($conexao, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        //$nome = $row['nome'];
        $cpf = $row['CPF'];
        $email = $row['email'];
        $senha = $row['senha'];
    }
?>
<br>
<div class="container">
    <div class="jumbotron">
        <h2>Fazer Reservas</h2> 
        <h5 class="text-primary" >Preencha os campos para fazer uma reserva!</h5><br>
        <form method="post" action="reservar.php" >

            <input type="radio" name="tipo" value="Individual" checked> Individual <br>
            <input type="radio" name="tipo" value="Casal Simples"> Casal Simples <br>
            <input type="radio" name="tipo" value="Casal Deluxe"> Casal Deluxe <br>

            <br>Nome :<input type="text" name="nome" placeholder="Nome" value="<?= $nome ?>" />
            CPF :<input type="text" name="cpf" placeholder="Cpf" value="<?= $cpf ?>" />
            E-mail :<input type="text" name="email" placeholder="E-mail" value="<?= $email ?>" />
            Senha :<input type="password" name="senha" value="<?= $senha ?>" /><br>
           
            <br>Chegada:<input type="date" name="chegada"/>
            Saída:<input type="date" name="saida"/>
            Adulto(s):<input type="number" name="adulto" min="1" max="3" step="1" value="1"/>
            Criança:<input type="number" name="crianca" min="0" max="2" step="1" value="0"/>
            Idade da criança:<input type="number" name="idade" min="0" max="7" step="1" value="0"/><br>
            <br><input class="btn btn-primary" type="reset" name="botao_limpar" value="Limpar"/>
            <input class="btn btn-primary" type="submit" name="enviar" value="Reservar">
        </form>
    </div> 
</div>
