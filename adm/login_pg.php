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
                    <input type="text" name="nome" placeholder="Informe seu nome" class="form-input">
                </div>
                
                <div>
                    <input type="password" name="senha" placeholder="Informe sua senha" class="form-input">
                </div>

                <div>
                    <input type="submit" value="Entrar" class="btn btn-primary btn-lg">
                </div>

            </form>
        </div>
    </div>