<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta Charset-->
    <meta charset="UTF-8">

    <!--Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     
    <!--Fuente del Header-->
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <!--Icons-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png"> <!--Icono de pestaña-->

    <!--Normalize-->
    <link rel="stylesheet" href="css/normalize.css">
    
    <!--Own CSS-->
    <link rel="stylesheet" href="css/squawk.css">

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