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

            <section class="profile-banner-container">
                <div class="profile-banner-info">
                    <div class="img-banner">
                        <a href="profile.php"><img src="img/fullstack.PNG" alt="Imagen de banner de [Usuario]"></a>
                    </div>
                    <div class="profile-banner-picture">
                        <a href="posts.php"><img src="img/perfil-prueba.png" alt="Foto de perfil de [Usuario]"></a>
                    </div>
                    <div class="profile-banner-name center-text">
                        <a href="profile.php">Mi Nombre de Usuario</a>
                    </div>
                </div>
                <div class="profile-banner-statistics">
                    <div class="user-posts">
                        XXX <br> posts
                    </div>
                    <span class="divisor"></span>
                    <div class="user-reactions">
                        XXX personas <br> reaccionaron 
                    </div>
                    <span class="divisor"></span>
                    <div class="user-shared-posts">
                        XXX personas <br> compartieron posts
                    </div>
                </div>
            </section>

            <section class="main-title-container">
                <h1 class="text-center">
                    Amigos!
                </h1>
            </section>

            <section class="main-index-container">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar amigos...">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </section>

            <section class="main-index-container"> <!--Recicled because muh code-->

                <div class="friends-container">
                    <div class="friends">
                        <div class="friend-profile-picture">
                            <a href="profile.php"><img src="img/logo.png" alt="NombreDePerfil"></a>
                        </div>
                        <div class="friend-username">
                            <p><a href="profile.php">Amigo1</a></p> 
                            <em>XXX amigos en com&uacute;n</em>
                        </div>
                    </div>

                    <div class="friends">
                        <div class="friend-profile-picture">
                            <a href="profile.php"><img src="img/logo.png" alt="NombreDePerfil"></a>
                        </div>
                        <div class="friend-username">
                            <p><a href="profile.php">Amigo2</a></p> 
                            <em>XXX amigos en com&uacute;n</em>
                        </div>
                    </div>

                    <div class="friends">
                        <div class="friend-profile-picture">
                            <a href="profile.php"><img src="img/logo.png" alt="NombreDePerfil"></a>
                        </div>
                        <div class="friend-username">
                            <p><a href="profile.php">Amigo3</a></p> 
                            <em>XXX amigos en com&uacute;n</em>
                        </div>
                    </div>

                </div>
            </section> <!-- Main-index-container -->
            
        </div> <!-- Main-container -->

    </main>
    <?php
        $active = 2;
        require_once("loggedFooter.php");
    ?>
</body>

</html>