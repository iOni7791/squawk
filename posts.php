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
                <div class="post-comment-container">
                    <article class="post-container">
                        <div class="post-info-container">
                            <div class="post-profile-picture">
                                <a href="profile.php"><img src="img/logo.png" alt="MiNombre"></a>
                            </div>
                            <div class="post-user-time-container">
                                <p><a href="profile.php">Yo</a></p> 
                                <em>Hace XX minutos</em>
                            </div>
                        </div>
                        <br>
                        <div class="post-title">
                            <h2 class="center-text">
                                Mi posteo!
                            </h2>
                        </div>
                        
                        <div class="statistics center-text">
                            <a href="#">XXX<br>Reacciones</a>
                            <a href="#">XXX<br>Comentarios</a>
                            <a href="#">XXX veces<br>Compartido</a>    
                        </div>

                        <div class="post-img-container center-text">
                            <img src="img/programar-es-mi-pasion.jpg">
                        </div>
                        
                        <div class="text-container">
                            Una descripci&oacute;n de mi posteo! Me extiendo lo suficinente como para ver el ancho del cuadro de texto!
                        </div>

                        <div class="actions-container center-text">
                            <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><br>Reaccionar!</a>
                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i><br>Comentar</a>
                            <a href="#"><i class="fa fa-share" aria-hidden="true"></i><br>Compartir</a>
                        </div>
                        <form class="comment-response" action="posts.php"> <!--hacer visible con JS al presionar el botón COMENTAR/RESPONDER-->
                            <div class="comment-response-textarea">
                                <textarea name="comment" maxlength="150" placeholder="Hacer un comentario"></textarea>                            
                            </div>
                            <div class="center-text">
                                    <button class="btn btn-primary fs-1-5rem" type="submit"> Enviar comentario </button>
                            </div>
                        </form>
                    </article> <!--post-container-->

                    <br>

                    <h3>Comentarios</h3>
                    <div class="comment-container">
                        <div class="comment-info-container">
                            <div class="post-profile-picture">
                                <a href="profile.php"><img src="img/logo.png" alt="MiNombre"></a>
                            </div>
                            <div class="user-comment-container">
                                <p><a href="profile.php">Otro usuario</a></p> 
                                <div class="comment">
                                    <blockquote> Jajajajajaja. Denunciado.</blockquote>
                                </div>
                                <div class="comment-statistics">
                                    <span><strong>XXX</strong> reacciones</span>
                                    <span><strong>XXX</strong> respuestas</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="actions-container center-text">
                            <a href="#">Reaccionar! <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                            <a href="#">Responder <i class="fa fa-comment-o" aria-hidden="true"></i></a>  
                        </div>
                    </div> <!--comment-container1-->
                    <br>
                    <div class="comment-container">
                        <div class="comment-info-container">
                            <div class="post-profile-picture">
                                <a href="profile.php"><img src="img/logo.png" alt="MiNombre"></a>
                            </div>
                            <div class="user-comment-container">
                                <p><a href="profile.php">Otro usuario más</a></p> 
                                <div class="comment">
                                    <blockquote> Jajajajajaja. Denunciado x2.</blockquote>
                                </div>
                                <div class="comment-statistics">
                                    <span><strong>XXX</strong> reacciones</span>
                                    <span><strong>XXX</strong> respuestas</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="actions-container center-text">
                            <a href="#">Reaccionar! <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                            <a href="#">Responder <i class="fa fa-comment-o" aria-hidden="true"></i></a>  
                        </div>
                    </div> <!--comment-container2-->
                    <form class="comment-response" action="posts.php"> <!--hacer visible con JS al presionar el botón COMENTAR/RESPONDER-->
                        <div class="comment-response-textarea">
                            <textarea name="comment" maxlength="150" placeholder="Hacer un comentario"></textarea>                            
                        </div>
                        <div class="center-text">
                                <button class="btn btn-primary fs-1-5rem" type="submit"> Enviar comentario </button>
                        </div>
                    </form>
                </div>
            </section> <!-- Main-signup-container -->
        </div> <!-- Main-container -->
    </main>

    <?php
        $active = 4;
        require_once("loggedFooter.php");
    ?>
</body>

</html>