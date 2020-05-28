@extends('layouts.base')

@section('contenido')
<main>
        <div class="main-container">
            <section class="main-title-container">
                <h1 class="text-center">
                    {{ __('Contáctenos!') }}
                </h1>
            </section>

            <section class="main-index-container row justify-content-center"> <!--Recicled because muh code-->
                <div class="col-md-10">
                    <form action="mailto:yoni7791@gmail.com" enctype="text/plain">
                        @csrf
                        <div class="form-group row"> 
                            <label for="nombre" class="col-md-4 col-form-label text-md-right fs-1-5rem center-text"><strong>{{ __('Nombre') }}</strong></label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nombre"  value="{{ old('nombre') }}" required autocomplete="nombre">
                            </div>
                        </div>

                        <div class="form-group row">       
                            <label for="email" class="col-md-4 col-form-label text-md-right fs-1-5rem center-text"><strong>{{ __('Email') }}</strong></label>
                            <div class="col-md-8">
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}" autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right fs-1-5rem center-text"><strong>{{ __('Número de contacto') }}</strong></label>
                            <div class="col-md-8">
                                <input class="form-control" type="tel" name="telefono" value="{{ old('telefono') }}" autocomplete="telefono">
                            </div> 
                        </div> 
                        <br>
                        <div class="form-group row justify-content-center">                           
                            <div class="input-group mb-3 justify-content-center">
                                <legend class="center-text">&iquest;Por qu&eacute; motivo nos contacta?</legend>
                                <div class="input-group-prepend">
                                    <label class="input-group-text fs-1-5rem" for="opciones">Opciones</label>
                                </div>
                                <select id="opciones">
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="Consulta">Consultas</option>
                                    <option value="Sugerencia">Sugerencias</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fs-1-5rem">Mensaje</span>
                                </div>
                                <textarea class="form-control" aria-label="Mensaje"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row radios">
                            <legend class="center-text"> <br>
                                &iquest;C&oacute;mo desea ser contactado?
                            </legend>
                            
                            <div class="col-md-8">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right fs-1-5rem center-text"><strong>Tel&eacute;fono</strong></label> 
                                <input type="radio" name="contacto" value="telefono" id="telefono">
                            </div>
                            <br>
                            <div class="col-md-8">
                                <label for="correo" class="col-md-4 col-form-label text-md-right fs-1-5rem center-text"><strong>E-mail</strong></label>
                                <input type="radio" name="contacto" value="correo" id="correo">
                            </div>
                        </div>

                        <div class="js-toggle"> <!-- Hay que hacer un Script acá para que aparezca al seleccionar teléfono -->
                            <legend class="center-text"> <br>
                                Si eligi&oacute; Tel&eacute;fono, indique la fecha y la hora
                            </legend> 
                            <br>
                            <div class="form-group row">
                                <br>
                                <label class="col-md-4 col-form-label text-md-right fs-1-5rem center-text" for="fecha"><strong>Fecha</strong> </label>
                                <div class="col-md-8">
                                    <input class="form-control fs-1-5rem" type="date" id="fecha" name="fecha" step="1">
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right fs-1-5rem center-text" for="hora"><strong>Hora</strong> </label>
                                <div class="col-md-8">
                                    <input class="form-control fs-1-5rem" type="time" id="hora" min="9:00" max="18:00">
                                </div>
                            </div>  
                        </div>
                        <br>
                        <div class="center-text">
                            <button class="btn btn-primary fs-1-5rem" type="submit">Enviar <i class="fa fa-envelope" aria-hidden="true"></i></button>
                            <br> <br>
                            <a href="faq" class="btn btn-success fs-1-5rem">Volver a F.A.Q. <i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
                        </div>
                        <br>
                    </form>
                </div>
            </section> <!-- Main-index-container -->
        </div> <!-- Main-container -->

    </main>
@endsection
