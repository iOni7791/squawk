<!DOCTYPE html>
<html lang="en">
<head> 

    <!-- Coloqué todas las librerías y snippets necesarios en headLibraries.php -->
    <?php
        require_once("headLibraries.php");
    ?>

    <title>SQUAWK! - Graznidos!</title>
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
                    Graznidos
                </h1>
            </section>
            
            <section class="main-login-container"> <!--Recicled because muh code-->
                
                <div class="post-container">
                    <div class="post-title">
                        <h2 class="center-text">
                            Mi posteo!
                        </h2>
                    </div>
                    <div class="img-container center-text">
                        <img src="img/programar-es-mi-pasion.jpg" alt="Un posteo"> <br>
                    </div>
                    <div class="text-container center-text">
                        Una descripci&oacute;n de mi posteo!
                    </div>
                </div>
                <br>
                <h2 class="center-text">Comentarios</h2>
                <div class="comment-container  border-black">
                    <div class="profile-container">
                        <div class="profile-picture">
                            <img src="img/logo.png" alt="F">
                        </div>
                        <div class="profile-username">
                            Usuario
                        </div>
                    </div>
                    <div class="comment">
                        Jajajajajaja. Denunciado.
                    </div>
                    <div class="actions-container">
                        <a href="#">Me gusta!<i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                        <a href="#">Comentar...<i class="fa fa-comment-o" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="comment-textarea">
                    <textarea name="comment" maxlength="150" placeholder="Realizar un comentario"></textarea>                            
                </div>
                    
            </section> <!-- Main-signup-container -->
        </div> <!-- Main-container -->
    </main>

    <?php
        require_once("loggedFooter.php");
    ?>
</body>

</html>