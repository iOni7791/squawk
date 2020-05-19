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
                        <h3 class="text-center">Por ahora, y hasta el día de hoy, aca va el dia fechaCastellano ($diaBase), el proyecto cuenta con las siguientes maquetas:</h3><br>
                        <ul class="no-deco text-center">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="register.php">Registro</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="profile.php">Perfil</a></li>
                            <li><a href="faq.php">F.A.Q.</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                            <li><a href="newPost.php">Nuevos post</a></li>
                            <li><a href="posts.php">Posteos</a></li>
                            <li><a href="friends.php">Amigos (En progreso...)</a></li>
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
                    <button class="boton-index btn btn-primary fs-1-5rem"> <a href="register.php">Registrar</a> </button>
                </div> <br>

                <span class="divisor"></span>

                <div class="center-text button-element">
                    Si ya ten&eacute;s una cuenta, pod&eacute;s ingresar ac&aacute; <br> <br>
                    <button class="boton-index btn btn-success fs-1-5rem"> <a href="login.php">Login</a> </button>
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