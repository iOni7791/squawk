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

                    <div class="faq-actions center-text">
                        <div class="center-text">
                            <a href="editfaq"> <button class="btn btn-primary fs-1-5rem">Editar Pregunta <i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>
                        </div>
                    
                        <div class="center-text"> 
                            <a href="deletefaq"> <button class="btn btn-dark fs-1-5rem">Eliminar Pregunta <i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <br>
                </article>

                <article class="faq-id">
                    <br>
                    <h2 class="question text-center">
                        ¿Ya es completamente funcional?
                    </h2>
                    <p class="answer text-center">
                        Todavía se encuentra en desarrollo, hasta el día de la fecha, aca va fechaCastellano ($diaBase);.
                    </p>

                    <div class="faq-actions center-text">
                        <div class="center-text">
                            <a href="editfaq"> <button class="btn btn-primary fs-1-5rem">Editar Pregunta <i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>
                        </div>
                    
                        <div class="center-text"> 
                            <a href="deletefaq"> <button class="btn btn-dark fs-1-5rem">Eliminar Pregunta <i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <br>
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

                    <div class="faq-actions center-text">
                        <div class="center-text">
                            <a href="editfaq"> <button class="btn btn-primary fs-1-5rem">Editar Pregunta <i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>
                        </div>
                    
                        <div class="center-text"> 
                            <a href="deletefaq"> <button class="btn btn-dark fs-1-5rem">Eliminar Pregunta <i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <br>
                </article>
                <br>
                        
                <article class="faq-id">
                    <h2 class="question text-center">
                        ¿Quiénes se encuentran al cargo del proyecto?
                    </h2>
                    <p class="answer text-center">
                        Este proyecto es el trabajo en conjunto de los alumnos <strong> <a href="https://www.linkedin.com/in/javiermacedo/">Javier Macedo</a></strong>
                        y <strong><a href="https://www.linkedin.com/in/cristian-quispe-5ba821144/">Cristian Quispe</a></strong>
                        del curso <strong><u> Desarrollo Web Fullstack</u></strong> de <strong> <a href="https://www.digitalhouse.com/">Digital House</a></strong>.
                    </p>
                    <div class="faq-actions center-text">
                        <div class="center-text">
                            <a href="editfaq"> <button class="btn btn-primary fs-1-5rem">Editar Pregunta <i class="fa fa-pencil-square" aria-hidden="true"></i></button></a>
                        </div>
                    
                        <div class="center-text"> 
                            <a href="deletefaq"> <button class="btn btn-dark fs-1-5rem">Eliminar Pregunta <i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    <br>
                </article>
                <br>

                <div class="center-text">
                    <a href="newfaq"> <button class="btn btn-success fs-1-5rem">Nueva Pregunta <i class="fa fa-plus-square" aria-hidden="true"></i></button></a>
                </div>
                
                <br>
                <div class="text-center">
                    <p>Si posee alguna otra duda o sugerencia, por favor cont&aacute;ctenos</p>
                    <a href="contact" class="btn btn-success fs-1-5rem">Contactar <i class="fa fa-envelope" aria-hidden="true"></i></a>
                </div>
                <br>

                <!--Así tendría que verse editfaq si supiese cómo hacerlo andar-->
                <h2 class="text-center">Así tendría que verse editfaq si supiese cómo hacerlo andar</h2>
                <div class="edit-new-faq">
                    <!--Pensaba que edit y new fuesen lo mimso, total acordate que si el elemento ya existe, Eloquent hace el update automáticamente-->
                    <form action="newfaq" method="POST">
                        <div class="form-group row">
                            <label for="pregunta" class="col-md-4 col-form-label text-md-right center-text"><strong>{{ __('Pregunta') }}</strong></label>

                            <div class="col-md-8">
                                <input id="pregunta" type="text" class="form-control fs-1-5rem" name="pregunta" value="" placeholder="Ingrese aquí la pregunta" required> 
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="respuesta" class="col-md-4 col-form-label text-md-right center-text"><strong>{{ __('Respuesta') }}</strong></label>

                            <div class="col-md-8">
                                <textarea name="respuesta" id="respuesta" value="" maxlength="500" placeholder="Ingrese aquí la respuesta" required></textarea>
                            </div>
                        </div>
                        <br>

                        <div class="faq-actions center-text">
                            <div class="center-text">
                                <a href=""> <button class="btn btn-success fs-1-5rem" type="submit">Confirmar <i class="fa fa-check-square" aria-hidden="true"></i></button></a>
                            </div>
                        
                            <div class="center-text"> 
                                <a href=""> <button class="btn btn-dark fs-1-5rem" type="submit">Cancelar <i class="fa fa-times-circle" aria-hidden="true"></i></button></a>
                            </div>
                        </div>
                        Y lo vas a tener que meter en otra página llamada newfaq o edit faq, no se. Onda, si le das editfaq que cargue los datos de la pregunta y la respuesta y si es newfaq entonces que te de el formulario en blanco
                    </form>
                </div>
            </section> <!-- Main-signup-container -->

        </div> <!-- Main-container -->

    </main>
@endsection
