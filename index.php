<?php
    session_start();
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $diaBase = date('d-m-Y');
    require_once('fechaCastellano.php');
    require_once("db.php");
    checaLogin();

    $usuarioActual = $_SESSION["usuario"];
    $_SESSION["logueado"] = false;
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
                    Bienvenidos a <strong>SQUAWK!</strong>
                </h1>
            </section>
            
            <section class="main-index-container"> <!--Recicled because muh code-->
               <h2 class="text-center">Este proyecto todavía está en desarrollo!</h2>
               <br>
               <article class="intro-container">
                    
                        <strong>Squawk!</strong> es una <em>red social</em>, un proyecto desarrollado por <strong> <a href="https://www.linkedin.com/in/javiermacedo/">Javier Macedo</a></strong>
                        y <strong><a href="https://www.linkedin.com/in/cristian-quispe-5ba821144/">Cristian Quispe</a></strong>
                        para el curso de <strong><u> Desarrollo Web Fullstack</u></strong> de <strong> <a href="https://www.digitalhouse.com/">Digital House</a></strong>. 
                        <br>
                        <br>
                        <h3 class="text-center">Por ahora, y hasta el día de hoy, <?= fechaCastellano ($diaBase); ?>, el proyecto cuenta con las siguientes maquetas:</h3><br>
                        <ul class="no-deco text-center">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="register.php">Registro</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="profile.php">Perfil</a></li>
                            <li><a href="faq.php">F.A.Q.</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                        <br><br>
                        <marquee behavior="scroll" direction="right"> Saludos! </marquee>
                    
               </article>
               <br> 
            </section> <!-- Main-index-container -->
            
            <section class="main-buttons-container">
                <!-- login/register-buttons -->
                <div class="center-text button-element">
                    Si no ten&eacute;s una cuenta, pod&eacute;s registrarte ac&aacute; <br> <br>
                    <button class="boton-index btn btn-primary fs-1-5rem"> <a href="register.html">Registrar</a> </button>
                </div> <br>

                <span class="divisor"></span>

                <div class="center-text button-element">
                    Si ya ten&eacute;s una cuenta, pod&eacute;s ingresar ac&aacute; <br> <br>
                    <button class="boton-index btn btn-success fs-1-5rem"> <a href="login.html">Login</a> </button>
                </div>
            </section> <!-- Main-signup-container -->
        </div> <!-- Main-container -->

    </main>
    <?php
        $active = 1;
        require_once("footer.php");
    ?>
</body>

</html>