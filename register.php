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

    <title>SQUAWK! - Registro</title>
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
                <a href="login.php" class="xy-center-cont"> 
                    <span class="header-login-span">
                        Login
                    </span>
                    <i class="fa fa-sign-in header-login-icon" aria-hidden="true" alt="Ingresar"></i>
                </a>
            </div>
        </div> <!--main-header-container-->
    </header>

    <main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    Registro
                </h1>
            </section>
            
            <section class="main-signup-container">
                <form action="register.php" method="POST" enctype="multipart/form-data">
                    <!-- Datos de la cuenta-->
                    <fieldset class="center-text"> 
                        <div class="form-text" class="row">
                            <legend class="center-text">Datos de la cuenta</legend>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="username" value="" placeholder="Nombre de Usuario" required>
                            </div>
                            
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="email" name="reg_email" value="" placeholder="Email" required>
                            </div>
                            
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="reg_passwd" placeholder="Contraseña" required>
                            </div>
                        
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="reg_passwdC" placeholder="Confirmar contraseña" required>
                            </div>
                        </div>
                    </fieldset> <br>
                     
                    <!--Datepicker, cuando encuentre algo mejor lo cambio-->
                    <fieldset>
                        <legend class="center-text">Ingrese fecha de nacimiento</legend>
                        <input class="form-control form-control-sm fs-1-5rem" type="date" name="fecha_nac" step="1" max="2002-12-31">
                    </fieldset> <br>
                    
                    <!-- Genero -->
                    <fieldset> 
                        <legend class="center-text">Seleccione g&eacute;nero</legend>
                        <div class="radios center-text">
                            <span> Masculino <br> <input type="radio" name="genero" value="m"> </span>
                            <span> Personalizado <br> <input type="radio" name="genero" value="o"> </span>
                            <span> Femenino <br><input type="radio" name="genero" value="f"> </span>
                        </div>  
                    </fieldset> <br> <br>

                    <!-- Acepta terminos y condiciones -->
                    <div class="center-text"> 
                        <input type="checkbox" name="acepta" value="s" checked required> <span class="fs-1-5rem">Acepto los <a href="terms.php">Términos y Condiciones</a></span>
                        <br> <br>
                        <button class="btn btn-primary fs-1-5rem" type="submit"> Registro</button>
                    </div>
                </form>
            </section> <!-- Main-signup-container -->
        </div> <!-- Main-container -->
    </main>

    <footer>
        <div class="main-footer-container">
            <nav class="barra-navegacion">
                <ul>  
                    <li>
                        <a class="active fs-1-5rem border-black" href="register.php"> Registro <br>
                            <span title="Crea una cuenta para buitrear!">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="fs-1-5rem border-black" href="login.php"> Ingreso <br>
                            <span title="Ingresa a tu nido">
                            <i class="fa fa-sign-in fs-1-5rem" aria-hidden="true"></i>
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