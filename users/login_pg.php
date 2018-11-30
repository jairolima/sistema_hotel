<?php
    include("bootstrap_css.php");
?>
    <div class="conta">
        <div class="form-box">
            <form action="login.php" method="post">
                <div>
                    <h1>Login</h1>
                </div>

                <div>
                    <input type="text" name="cpf" placeholder="Informe seu CPF" class="form-input">
                </div>
                
                <div>
                    <input type="password" name="senha" placeholder="Informe sua Senha" class="form-input">
                </div>

                <div>
                    <input type="submit" value="Entrar" class="btn btn-primary btn-lg">
                </div>

                <div>
                    Não é registrado? <a href="fazer_cadastro.php">Crie uma conta</a>.
                </div>
            </form>
        </div>
    </div>
</body>
</html>