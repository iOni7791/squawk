@extends('layouts.base')

@section('contenido')
<main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    Preguntas Frecuentes
                </h1>
            </section>

            <section class="main-index-container"> <!--Recicled because muh code-->
                <article class="faq-id">
                    <h2 class="question text-center">
                        ¿Qué es <strong>SQUAWK!</strong>?
                    </h2>
                    <p class="answer text-center">
                        Squawk! es una red social, un sitio web en donde podrás encontrar gente a quién seguir y que también podrán seguirte.
                    </p>
                    <br>
                </article>

                <article class="faq-id">
                    <h2 class="question text-center">
                        ¿Ya es completamente funcional?
                    </h2>
                    <p class="answer text-center">
                        Todavía se encuentra en desarrollo, hasta el día de la fecha.
                    </p>
                </article>
                <br>
                
                <article class="faq-id">
                    <h2 class="question text-center">
                        ¿Qué funcionalidades tiene?
                    </h2>
                    <p class="answer text-center">
                        Por ahora comenzará con funciones básicas como añadir amigos, subir posts, hacer comentarios, etc.
                        Sin embargo, a medida que el proyecto vaya avanzando, se añadirán nuevas funcionalidades
                        dándote una experiencia única.
                    </p>
                    <br>
                </article>
     
                <article class="faq-id">
                    <h2 class="question text-center">
                        ¿Quiénes se encuentran al cargo del proyecto?
                    </h2>
                    <p class="answer text-center">
                        Este proyecto es el trabajo en conjunto de los alumnos <strong> <a href="https://www.linkedin.com/in/javiermacedo/">Javier Macedo</a></strong>
                        y <strong><a href="https://www.linkedin.com/in/cristian-quispe-5ba821144/">Cristian Quispe</a></strong>
                        del curso <strong><u> Desarrollo Web Fullstack</u></strong> de <strong> <a href="https://www.digitalhouse.com/">Digital House</a></strong>.
                    </p>
                </article>
                <br>
                <div class="text-center">
                    <p>Si posee alguna otra duda o sugerencia, por favor cont&aacute;ctenos</p>
                    <a href="contact" class="btn btn-success fs-1-5rem">Contactar <i class="fa fa-envelope" aria-hidden="true"></i></a>
                </div>
                <br>
            </section> <!-- Main-signup-container -->

        </div> <!-- Main-container -->

    </main>
@endsection
