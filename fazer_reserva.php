
<br>
<div class="container">
    <div class="jumbotron">
        <h2>Fazer Reservas</h2> 
        <h5 class="text-primary" >Preencha os campos para fazer uma reserva!</h5><br>
        <form method="post" action="reservar.php" >

            <?php $conexao = mysqli_connect("localhost", "root", "", "hotel_mv"); ?>
            <?php $query = $conexao->query("SELECT DISTINCT tipo FROM suite where ocupado = 'N';"); ?>
            Suíte :<select name="tipo">
                <?php while($reg = $query->fetch_array()) { ?>
                    <option value="<?php echo $reg['tipo'];?>"><?php echo $reg['tipo']; ?>
                    </option>
                <?php } ?>
            </select><br>

            <br>Nome :<input type="text" name="nome" placeholder="Nome" />
            CPF :<input type="text" name="cpf" placeholder="Cpf" />
            E-mail :<input type="text" name="email" placeholder="E-mail" />
            Senha :<input type="text" name="senha" placeholder="Senha" /><br>
           
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