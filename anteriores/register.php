<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Coloqué todas las librerías y snippets necesarios en headLibraries.php -->
    <?php
        require_once("headLibraries.php");
    ?>

    <title>SQUAWK! - Registro</title>
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
                     
                    <!--Datepicker, cuando encuentre algo mejor lo cambio hay que hacer que cuente 18 años para atrás-->
                    <fieldset>
                        <legend class="center-text">Ingrese fecha de nacimiento</legend>
                        <input class="form-control form-control-sm fs-1-5rem" type="date" name="fecha_nac" step="1" max="2002-12-31">
                    </fieldset> <br>
                    
                    <!-- Genero -->
                    <fieldset> 
                        <legend class="center-text">Seleccione g&eacute;nero</legend>
                        <div class="radios center-text">
                            <span> 
                                <label for="m"> Masculino</label> <br> 
                                <input type="radio" id="m" name="genero" value="m"> 
                            </span>
                            <span> 
                                <label for="o">Personalizado</label><br> 
                                <input type="radio" id="o" name="genero" value="o">
                                <!-- Habría que poner acá un pequeño campo para ingresar el genero con un Script acá para que aparezca al seleccionar esta opción --> 
                            </span>
                            <span> 
                                <label for="f">Femenino</label><br>
                                <input type="radio" id="f" name="genero" value="f"> 
                            </span>
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

    <?php
        $active = 3;
        require_once("footer.php");
    ?>
</body>

</html>