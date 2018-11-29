<?php
    include("bootstrap_css.php");
?>
    <div class="conta">
        <div class="form-box">
            <form action="cadastro.php" method="post">
                <div>
                    <h1>Cadastro</h1>
                </div>

                <div>
                    <input type="text" name="nome" placeholder="Informe seu nome" class=form-input required>
                </div>

                <div>
                    <input type="text" name="cpf" placeholder="Informe seu CPF" class=form-input required>
                </div>
                
                <div>
                    <input type="password" name="senha" placeholder="Informe sua senha" class=form-input required>
                </div>
                
                <div>
                    <input type="email" name="email" placeholder="Seu e-mail" class=form-input required>
                </div>

                <div>
                    <input type="submit" value="Cadastrar" class="btn btn-primary btn-lg">
                </div>

                <div>
                    Já tem uma conta? <a href="login_pg.php">Efetue login</a>.
                </div>
            </form>
        </div>
    </div>