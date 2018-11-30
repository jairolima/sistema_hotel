
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">HMV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo "$fazer_reserva" ?>>Reservar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo "$disponiveis" ?>>Disponíveis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo "$ocupados" ?>>Ocupados</a>
                </li>
            </ul>
            <div>
                <?php echo 'Olá, '.$_SESSION['usuario'] ?>
                <a class="btn btn-outline-secondary" href=<?php echo "$logout" ?> role="button">Sair</a>
            </div>
        </div>
    </div>
</nav>
