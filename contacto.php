<?php
    session_start();
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