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

    <title>SQUAWK! - Ingresar</title>
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
                <a href="index.php" class="xy-center-cont"> 
                    <span class="header-login-span">
                        Home
                    </span>
                </a>
            </div>
        </div> <!--main-header-container-->
    </header>

    <main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    Welcome to SQUAWK!
                </h1>
            </section>
            
            <section class="main-index-container"> <!--Recicled because muh code-->
               <h2 class="text-center">This is totally a WIP!</h2>
               <br>
               <article class="text-center">
                    <blockquote>
                        "What is this site for? I don't even know myself yet! <br>
                        It seems to be some kind of experimental Social Media. <br>
                        No biggie, it's only a project made for a course. <br>
                        Is that the right word? "Course"? IDK, dud. <br>
                        Greetings to my friend, the Comfybro himself. <br>
                        Love you, fren, thanks for all the tips and pointers!"
                    </blockquote>
                    <br>
               </article> 
            </section> <!-- Main-signup-container -->
            
            <section class="main-buttons-container">
                <!-- login/register-buttons -->
                <div class="center-text">
                    Si no ten&eacute;s una cuenta, pod&eacute;s registrarte ac&aacute; <br> <br>
                    <button class="boton-index btn btn-primary fs-1-5rem"> <a href="register.php">Registrar</a> </button>
                </div> <br>

                <span class="divisor"></span>

                <div class="center-text">
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