
    
    <?php 

        

        session_start();

        include("style.php");
        include("menu.php");
        include("main.php");

        if(isset($_SESSION['username'])) {
            header("location:main.php");
        }

    ?>
