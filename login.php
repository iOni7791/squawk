<?php
    session_start();
    $_SESSION["logueado"] = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Coloqué todas las librerías y snippets necesarios en headLibraries.php -->
    <?php
        require_once("headLibraries.php");
    ?>

    <title>SQUAWK! - Ingresar</title>
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
                    Ingresar
                </h1>
            </section>
            
            <section class="main-login-container"> <!--Recicled because muh code-->
                <form action="home.php" method="POST"> 
                    <!-- Campos de login -->
                    <fieldset class="center-text"> 
                        <div class="form-text" class="row">
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="username" value="" placeholder="Nombre de Usuario" required>
                            </div>
                                                        
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="reg_passwd" placeholder="Contraseña" required>
                            </div>
                        </div>
                    </fieldset> 
                    <p class="center-text"><a href="passwordRecovery.php">¿Olvid&oacute; su contrase&ntilde;a?</a></p>
                    <br>
                    <!-- login-button -->
                    <div class="center-text">
                        <input type="checkbox" name="acepta" value="s" checked> <span class="fs-1-5rem">Recordar contrase&ntilde;a</span>
                        <br><br> 
                        <button class="btn btn-primary fs-1-5rem" type="submit"> Ingresar </button>
                    </div>
                </form>
            </section> <!-- Main-signup-container -->
        </div> <!-- Main-container -->
    </main>

    <?php
        $active = 2;
        require_once("footer.php");
    ?>
</body>

</html>