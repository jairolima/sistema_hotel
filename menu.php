<?php 

    $index_url='index.php';
    $fazer_reserva='fazer_reserva.php';
    $fale_conosco='fale_conosco.php';
    $fazer_cadastro='users/cadastro.php';
    $logout_url='users/logout.php';

?> 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href=<?php echo "$index_url" ?>>HMV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo "$index_url" ?>>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo "$fazer_reserva" ?>>Reservar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo "$fale_conosco" ?>>Contato</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Usuário" aria-label="Search">
                <input class="form-control mr-sm-2" type="text" placeholder="Senha" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Entrar</button>
                <a class="btn btn-outline-secondary" href="cadastro.php" role="button">Cadastrar</a>
            </form>
        </div>
    </div>
</nav>
