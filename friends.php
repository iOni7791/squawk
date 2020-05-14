<?php
    session_start();
    $_SESSION["logueado"] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Coloqué todas las librerías y snippets necesarios en headLibraries.php -->
    <?php
        require_once("headLibraries.php");
    ?>

    <title>SQUAWK! - Inicio</title>
</head>

<body>

    <?php
        //Agregar acá una funcionalidad similar al footer
        require_once("header.php");
    ?>

    <main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    Amigos!
                </h1>
            </section>
            
            <section class="main-index-container"> <!--Recicled because muh code-->
               
            </section> <!-- Main-index-container -->
            
        </div> <!-- Main-container -->

    </main>
    <?php
        $active = 2;
        require_once("loggedFooter.php");
    ?>
</body>

</html>