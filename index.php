
    
    <?php 

        

        session_start();

        include("style.php");
        include("menu.php");
        include("main.php");
        include("rodape.php");

        if(isset($_SESSION['CPF'])) {
            header("location:main.php");
        }

    ?>
