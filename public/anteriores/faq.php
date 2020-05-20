<?php
    session_start();
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $diaBase = date('d-m-Y');
    require('fechaCastellano.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Coloqué todas las librerías y snippets necesarios en headLibraries.php -->
    <?php
        require_once("headLibraries.php");
    ?>

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