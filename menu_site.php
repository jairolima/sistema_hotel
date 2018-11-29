
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href=<?php echo "$index" ?>>HMV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo "$index" ?>>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo "$fazer_reserva" ?>>Reservar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo "$contato" ?>>Contato</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="users/login.php" method="POST">
                <input class="form-control mr-sm-2" type="text" placeholder="Usuário" aria-label="Search" name="nome" required>
                <input class="form-control mr-sm-2" type="password" placeholder="Senha" aria-label="Search" name="senha" required>
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Entrar</button><p>&nbsp;</p>
                <a class="btn btn-outline-secondary" href=<?php echo "$cadastro" ?> role="button">Cadastrar</a>
            </form>
        </div>
    </div>
</nav>
