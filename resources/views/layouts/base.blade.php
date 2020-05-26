<!DOCTYPE html>
<html lang="es">
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

<!-- Date Picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js" integrity="sha256-K5G+7qV0tjuHL0LlhCU0TqQKR+7QwT8MfEUe2UgpmRY=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />

<!--Fuente del Header-->
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

<!--Icons-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="icon" href="storage/img/logo.png"> <!--Icono de pestaña-->

<!--Normalize-->
<link rel="stylesheet" href="css/normalize.css">

<!--Own CSS-->
<link rel="stylesheet" href="css/squawk.css">
    <title>SQUAWK!</title> <!--Habría que poner una variable acá para que diga en qué página está-->
</head>
<body>
    <header>
        <div class="main-header-container">
            <div class="header-title-container">
                <a href="./" class="xy-center-cont">
                    <h1>
                        SQUAWK!
                    </h1>
                </a>
            </div>

            <div class="header-logo-container">
                <a href="./" class="xy-center-cont">
                    <img class="header-logo" src="storage/img/logo.png" alt="SQUAWK!">
                </a>
            </div>

            <div class="header-link-container">
                <a href="./" class="xy-center-cont">
                    <span class="header-title-span">
                        Home
                    </span>
                </a>
            </div>
        </div> <!--main-header-container-->
    </header>
    @yield('contenido')
    <footer>
        <div class="main-footer-container">
            <nav class="barra-navegacion">
                <ul>
                    @guest
                        <li>
                            <a class="{{ $activo == 1 ? "active":"" }} fs-1-5rem border-black" href="./"> Inicio <br>
                                <span title="De vuelta al nido">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ $activo == 2 ? "active":"" }} fs-1-5rem border-black" href="milogin"> Ingreso <br>
                                <span title="Ingresa a tu nido">
                                <i class="fa fa-sign-in fs-1-5rem" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ $activo == 3 ? "active":"" }} fs-1-5rem border-black" href="miregister"> Registro <br>
                                <span title="Crea una cuenta para buitrear!">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ $activo == 4 ? "active":"" }} fs-1-5rem border-black" href="faq">
                                <span title="Preguntas Frecuentemente Graznadas"> F.A.Q. <br>
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ $activo == 5 ? "active":"" }} fs-1-5rem border-black" href="contact">
                                <span title="Un contacto para graznarnos"> Contacto <br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                    @endguest
                    @auth
                        <li>
                            <a class="{{ $activo == 1 ? "active":"" }} fs-1-5rem border-black" href="profile"> Nido <br>
                                <span title="Tu nido">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ $activo == 2 ? "active":"" }} fs-1-5rem border-black" href="friends"> Amigos <br>
                                <span title="Tus amigos, los buitres">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ $activo == 3 ? "active":"" }} fs-1-5rem border-black" href="posts">
                                <span title="Tus graznadas"> Posts <br>
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ $activo == 4 ? "active":"" }} fs-1-5rem border-black" href="profile"> Perfil <br>
                                <span title="Acicala tu perfil">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>                                  
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ $activo == 5 ? "active":"" }} fs-1-5rem border-black" href="logout">
                                <span title="Salir volando"> Salir <br>
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </span>
                            </a>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div> <!-- main-footer-container -->
    </footer>
</body>

</html>
