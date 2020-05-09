<?php
    session_start();
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $diaBase = date('d-m-Y');
    require('fechaCastellano.php');
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

    <title>SQUAWK! - F.A.Q.</title>
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
                    Preguntas Frecuentes
                </h1>
            </section>
            
            <section class="main-index-container"> <!--Recicled because muh code-->
               <article class="intro-container"> <!--Reciclado también porque quiero-->

                        <h2 class="text-center">
                            ¿Qué es <strong>SQUAWK!</strong>?
                        </h2>
                        <blockquote class="text-center">
                            Squawk! es una red social, un sitio web en donde podrás encontrar gente a quién seguir y que también podrán seguirte.
                        </blockquote>
                        <br>
                        <h2 class="text-center">
                            ¿Ya es completamente funcional?
                        </h2>
                        <blockquote class="text-center">
                            Todavía se encuentra en desarrollo, hasta el día de la fecha, <?= fechaCastellano ($diaBase); ?>.
                        </blockquote>
                        <br>
                        <h2 class="text-center">
                            ¿Qué funcionalidades tiene?
                        </h2>
                        <blockquote class="text-center">
                            Por ahora comenzará con funciones básicas como añadir amigos, subir posts, hacer comentarios, etc.
                            Sin embargo, a medida que el proyecto vaya avanzando, se añadirán nuevas funcionalidades
                            dándote una experiencia única.
                        </blockquote> 
                        <br>
                        <h2 class="text-center">
                            ¿Quiénes se encuentran al cargo del proyecto?
                        </h2>
                        <blockquote class="text-center">
                            Este proyecto es el trabajo en conjunto de los alumnos <strong> <a href="https://www.linkedin.com/in/javiermacedo/">Javier Macedo</a></strong>
                            y <strong><a href="https://www.linkedin.com/in/cristian-quispe-5ba821144/">Cristian Quispe</a></strong>
                            del curso <strong><u> Desarrollo Web Fullstack</u></strong> de <strong> <a href="https://www.digitalhouse.com/">Digital House</a></strong>.
                        </blockquote>
                        <br>
                        <div class="text-center">
                            <p>Si posee alguna otra duda o sugerencia, por favor cont&aacute;ctenos</p>
                            <a href="contacto.php" class="btn btn-success fs-1-5rem">Contactar</a>
                        </div>
                        <br>
                        <marquee behavior="scroll" direction="right"> Saludos! </marquee>
                    
               </article>
            </section> <!-- Main-signup-container -->
    
        </div> <!-- Main-container -->

    </main>
   
    <?php
        $active = 4;
        require_once("footer.php");
    ?>
</body>

</html>