@extends('layouts.base')

@section('contenido')
    <main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    Bienvenidos a <strong>SQUAWK!</strong>
                </h1>
            </section>

            <section class="main-index-container"> <!--Recicled because muh code-->
               <h2 class="text-center">Este proyecto todavía está en desarrollo!</h2>
               <br>
               <article class="intro-container">

                        <strong>Squawk!</strong> es una <em>red social</em>, un proyecto desarrollado por <strong> <a href="https://www.linkedin.com/in/javiermacedo/">Javier Macedo</a></strong>
                        y <strong><a href="https://www.linkedin.com/in/cristian-quispe-5ba821144/">Cristian Quispe</a></strong>
                        para el curso de <strong><u> Desarrollo Web Fullstack</u></strong> de <strong> <a href="https://www.digitalhouse.com/">Digital House</a></strong>.
                        <br>
                        <br>
                        <h3 class="text-center">Por ahora, y hasta el día de hoy, aca va el dia fechaCastellano ($diaBase), el proyecto cuenta con las siguientes p&aacute;ginas:</h3><br>
                        <ul class="no-deco text-center">
                            <li><a href="./">Inicio</a></li>
                            <li><a href="miregister">Registro</a></li>
                            <li><a href="milogin">Login</a></li>
                            <li><a href="profile">Perfil</a></li>
                            <li><a href="faq">F.A.Q.</a></li>
                            <li><a href="contact">Contacto</a></li>
                            <li><a href="posts">Posteos</a></li>
                            <li><a href="friends">Amigos (En progreso...)</a></li>
                        </ul>
                        <br><br>
                        <!-- <marquee behavior="scroll" direction="right"> Saludos! </marquee> -->

               </article>
               <br>
            </section> <!-- Main-index-container -->

            <section class="main-buttons-container">
                <!-- login/register-buttons -->
                <div class="center-text button-element">
                    <p class="opcion-index"> Si no ten&eacute;s una cuenta, pod&eacute;s registrarte ac&aacute; </p> <br>
                    <a href="miregister"><button class="boton-index btn btn-primary fs-1-5rem"><b>Registrar</b> <i class="fa fa-user-plus" aria-hidden="true"></i></button></a>
                </div> <br>

                <span class="divisor"></span>

                <div class="center-text button-element">
                   <p class="opcion-index"> Si ya ten&eacute;s una cuenta, pod&eacute;s ingresar ac&aacute; </p> <br>
                   <a href="milogin"><button class="boton-index btn btn-success fs-1-5rem"><b>Login</b> <i class="fa fa-sign-in" aria-hidden="true"></i></button></a>
                </div>
            </section> <!-- Main-signup-container -->
        </div> <!-- Main-container -->

    </main>
@endsection
