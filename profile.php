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

    <title>SQUAWK! - Perfil</title>
</head>

<body>
    <header>
        <div class="main-header-container">
            <div class="header-title-container">
                <a href="index.php" class="xy-center-cont">
                    <h1>
                        SQUAWK!
                    </h1>
                </a>
            </div>
            
            <div class="header-logo-container height-100">
                <a href="index.php" class="a-logo xy-center-cont">
                    <img class="header-logo" src="img/logo.png" alt="SQUAWK!">
                </a>
            </div>
            
            <div class="header-login-container">
                <a href="logout.php" class="xy-center-cont"> 
                    <span class="header-login-span">
                        Cerrar <br> Sesión
                    </span>
                </a>
            </div> 
        </div> <!--main-header-container-->
    </header>
    
    <main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    Editar Perfil
                </h1>
            </section>
            
            <!-- Datos de la cuenta -->
            <section class="main-profile-container">
                <form action="profile.php" method="POST" enctype="multipart/form-data">
                    <legend class="center-text">
                        Datos de la cuenta
                    </legend> <br>
                    
                    <div class="pfp-container center-text">
                        <div class="profile">
                            <label for="img">
                                Foto de perfil
                            </label> <br>                          
                            <img src="../img/logo.png" alt="Tu foto de perfil"> <br>
                            <label for="img">
                                Subir una imagen
                            </label> <br>
                            <label class="btn btn-primary fs-1-5rem">
                                Buscar <input type="file" id="img" name="img" accept="image/*" style="display: none;">
                            </label>
                        </div>

                        <div class="profile">
                            <label for="user_name">
                                Nombre de usuario
                            </label> <br>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="user_name" value="" placeholder="NombreEnLaBD">
                            </div> <br>

                            <label for="webpage">
                                Página web
                            </label> <br>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="user_name" value="" placeholder="www.tuPágina.com">
                            </div>
                        </div>
                    </div> <br>

                    <div class="center-text"> 
                        <button class="btn btn-primary fs-1-5rem" type="submit">Actualizar</button>
                    </div>
                </form>
            </section> <br> 

            <section class="main-profile-container">
                <form action="profile.php" method="POST">
                    <!-- Datos personales -->
                    <fieldset class="center-text"> 
                        <div class="form-text" class="row">
                            <legend class="center-text">Datos Personales</legend>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="first_name" value="" placeholder="Tu nombre" required>
                            </div>
                            
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="last_name" value="" placeholder="Tu apellido (opcional)">
                            </div>
                            
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="email" name="reg_email" value="" placeholder="Email" required>
                            </div>
                            
                            <div>
                                <textarea name="bio" maxlength="150" placeholder="Una pequeña descripción sobre tí..."></textarea>                            
                            </div>
                    </fieldset> <br>

                    <!--Datepicker, cuando encuentre algo mejor lo cambio-->
                    <fieldset>
                        <legend class="center-text fs-1-5rem">Fecha de nacimiento</legend>
                        <input class="form-control form-control-sm fs-1-5rem" type="date" name="fecha_nac" step="1" max="2002-12-31">
                    </fieldset> <br>

                    <!-- Genero -->
                    <fieldset> 
                        <legend class="center-text fs-1-5rem">Seleccione g&eacute;nero</legend>
                        <div class="radios center-text">
                            <span> Masculino <br> <input type="radio" name="genero" value="m"> </span>
                            <span> Personalizado <br> <input type="radio" name="genero" value="o"> </span>
                            <span> Femenino <br><input type="radio" name="genero" value="f"> </span>
                        </div>  
                    </fieldset> <br>

                    <div class="center-text"> 
                        <button class="btn btn-primary fs-1-5rem" type="submit">Actualizar</button>
                    </div> 
                </form>
            </section>

            <!-- Contraseña -->
            <section class="main-profile-container">
                <form action="profile.php" method="POST">
                    <fieldset class="center-text"> 
                        <div class="form-text" class="row">
                            <legend class="center-text">Cambiar contraseña</legend>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="prev_passwd" placeholder="Contraseña actual" required>
                            </div>
                                                        
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="reg_passwd" placeholder="Contraseña nueva" required>
                            </div>
                        
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="reg_passwdC" placeholder="Confirmar contraseña nueva" required>
                            </div>
                        </div>
                    </fieldset>

                    <div class="center-text"> 
                        <button class="btn btn-primary fs-1-5rem" type="submit">Cambiar contraseña</button>
                    </div>
    
                </form>
            </section> <!-- Main-profile-container -->
        </div> <!-- Main-container -->
    </main>

    <footer>
        <div class="main-footer-container">
            <nav class="barra-navegacion">
                <ul>
                    <li>
                        <a class="active fs-1-5rem border-black" href="profile.php"> Perfil <br>
                            <span title="Acicala tu perfil">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="fs-1-5rem border-black" href="index.php"> Inicio <br>
                            <span title="De vuelta al nido">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="fs-1-5rem border-black" href="register.php"> Registro <br>
                            <span title="Crea una cuenta para buitrear!">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="fs-1-5rem border-black" href="faq.php">
                            <span title="Preguntas Frecuentemente Graznadas"> F.A.Q. <br>
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="fs-1-5rem border-black" href="contacto.php">
                            <span title="Un contacto para graznarnos"> Contacto <br>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> <!-- main-footer-container -->         
    </footer>
</body>

</html>