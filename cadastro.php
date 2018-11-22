<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meu Sistema | Cadastro</title>
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="conta">
        <div class="form-box">
            <form action="painel.html" method="post">
                <div>
                    <h1>Cadastro</h1>
                </div>

                <div>
                    <input type="text" name="username" placeholder="Informe seu nome" class=form-input>
                </div>

                <div>
                    <input type="text" name="username" placeholder="Informe seu CPF" class=form-input>
                </div>
                
                <div>
                    <input type="password" name="password" placeholder="Informe sua senha" class=form-input>
                </div>
                
                <div>
                    <input type="email" name="email" placeholder="Seu e-mail" class=form-input>
                </div>

                <div>
                    <input type="submit" value="Cadastrar" class="btn btn-primary btn-lg">
                </div>

                <div>
                    Já tem uma conta? <a href="login.php">Efetue login</a>.
                </div>
            </form>
        </div>
    </div>
</body>
</html>