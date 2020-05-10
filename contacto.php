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

    <title>SQUAWK! - Contacto</title>
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
                    Cont&aacute;ctenos!
                </h1>
            </section>
            
            <section class="main-index-container"> <!--Recicled because muh code-->
                <form class="contacto" action="mailto:emailDestino@email.com" enctype="text/plain">
                    <fieldset class="center-text">
                        <div class="form-text" class="row"> 
                            <legend>Informaci&oacute;n Personal</legend> <!--Para poder decirle al usuario de qué trata esta parte-->
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="text" name="nombre" placeholder="Su nombre">
                            </div>
                            
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="email" name="email" placeholder="Su correo electrónico" required>
                            </div>

                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="tel" name="telefono" placeholder="Su teléfono" required>
                            </div>                          
                        </div>
                    </fieldset> <!--Agrupa todos los campos relacionados--> 
                    <br>
                    <fieldset class="center-text">
                        <legend>Informaci&oacute;n sobre su mensaje</legend>
                        <div>
                            <label for="opciones">&iquest;Por qu&eacute; motivo nos contacta?</label>                      
                            <select id="opciones">
                                <option value="" disabled selected>--Seleccione--</option>
                                <option value="Consulta">Consultas</option>
                                <option value="Sugerencia">Sugerencias</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                        <div>
                            <textarea name="message" maxlength="150" placeholder="Escriba su mensaje aquí..."></textarea>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset class="center-text">
                        <legend>Contacto</legend>
                        <p>
                            &iquest;C&oacute;mo desea ser contactado?
                        </p>

                        <div class="radios center-text">
                            <span>
                                <label for="telefono">Tel&eacute;fono</label> <br>
                                <input type="radio" name="contacto" value="telefono" id="telefono"> 
                            </span>
                            <span>
                                <label for="correo">E-mail</label> <br>
                                <input type="radio" name="contacto" value="correo" id="correo">
                            </span>
                        </div>
                        <br>
                        <div class="js-toggle"> <!-- Hay que hacer un Script acá para que aparezca al seleccionar teléfono -->
                            <p>Si eligi&oacute; Tel&eacute;fono, elija la fecha y la hora</p>
                            <label for="fecha">Fecha: </label>
                            <input class="form-control form-control-sm fs-1-5rem" type="date" id="fecha" name="fecha" step="1">
                            <br>
                            <div class="fs-1-5rem">
                                <label for="hora">Hora: </label>
                                <input class="form-control form-control-sm fs-1-5rem" type="time" id="hora" min="9:00" max="18:00">                       
                            </div>
                        </div>
                    </fieldset>
                    <div class="center-text">
                        <button class="btn btn-primary fs-1-5rem" type="submit">Enviar</button>
                        <br> <br>
                        <a href="faq.php" class="btn btn-success fs-1-5rem">Volver a F.A.Q.</a>
                    </div>
                    <br>
                </form>
            </section> <!-- Main-index-container -->            
        </div> <!-- Main-container -->

    </main>
   
    <?php
        $active = 5;
        require_once("footer.php");
    ?>
</body>

</html>