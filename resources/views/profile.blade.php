@extends('layouts.base')

@section('contenido')
    <main>
        <div class="main-container">

            <section class="profile-banner-container">
                <div class="profile-banner-info">
                    <div class="banner user-posts">
                        <h2>XXX<!--variable--></h2> <br> posts <br> graznados
                    </div>
                    <div class="banner profile-banner-picture">
                        <a href="profile"><img src="img/profiles/pfp-default.png" alt="$user['name']"></a> <br>
                        <a href="profile.php">Mi Nombre de Usuario</a>
                    </div>
                    <div class="banner user-reactions">
                        <h2>XXX<!--variable--></h2> <br> personas <br> reaccionaron
                    </div>
                </div>
            </section>

            <section class="main-title-container">
                <h1 class="text-center">
                    {{ __('Editar Perfil') }}
                </h1>
            </section>
    


            <!-- Datos de la cuenta -->
            <section class="main-profile-container">
                <form action="profile" method="POST" enctype="multipart/form-data">
                @csrf
                    <legend class="center-text">
                        <strong> Datos de la cuenta </strong>
                    </legend>
                    
                    <div class="pfp-container center-text">
                        <div class="profile">
                            <label for="img">
                                <b> Foto de perfil </b> <br>
                                <img src="../img/perfil-prueba.png" alt="Tu foto de perfil"> <br>
                            </label> <br>                          
                            
                            <label for="img">
                                Subir una imagen
                                <label class="btn btn-primary fs-1-5rem">
                                    Buscar <input type="file" id="img" name="img" accept="image/*" style="display: none;">
                                </label>
                            </label> <br>
                                                       
                            <div class="center-text"> 
                                <button class="btn btn-success fs-1-5rem" type="submit">Actualizar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </section> 
            <br> 

            <section class="main-profile-container">
                <form action="profile" method="POST">
                @csrf
                    <!-- Datos personales -->
                    <fieldset class="center-text"> 
                        <div class="form-text" class="row">
                            <legend class="center-text"> <strong> Datos Personales </strong></legend>
                      
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Nombre') }}</strong></label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><strong>{{ __('E-Mail') }}</strong></label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Descríbete') }}</strong></label>

                                <div class="col-md-8">
                                    <textarea name="bio" value="{{ old('email') }}" maxlength="250" placeholder="Una pequeña descripción sobre tí..."></textarea>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('bio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div>
                                <label for="user_name">
                                    <strong>  Nombre de usuario </strong>
                                </label> <br>    
                                <textarea name="bio" maxlength="150" placeholder="Una pequeña descripción sobre tí..."></textarea>                            
                            </div>
                    </fieldset> <br>

                    <!--Datepicker, cuando encuentre algo mejor lo cambio-->
                    <fieldset>
                        <legend class="center-text fs-1-5rem">Fecha de nacimiento</legend>
                        <input class="form-control form-control-sm fs-1-5rem" type="date" name="fecha_nac" step="1" max="2002-12-31">
                    </fieldset> 
                    <br>

                    <!-- Genero -->
                    <fieldset> 
                        <legend class="center-text fs-1-5rem">Seleccione g&eacute;nero</legend>
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
                    </fieldset> 
                    <br>
                    <div class="center-text"> 
                        <button class="btn btn-primary fs-1-5rem" type="submit">Actualizar</button>
                    </div> 
                </form>
            </section>

            <!-- Contraseña -->
            <section class="main-profile-container">
                <form action="profile.php" method="POST">
                @csrf
                    <fieldset class="center-text"> 
                        <div class="form-text" class="row">
                            <legend class="center-text">Cambiar contraseña</legend>
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="prev_passwd" placeholder="Contraseña actual" required>
                            </div>
                                                        
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="reg_passwd" placeholder="Contraseña nueva" required>
                            </div>
                        
                            <div>
                                <input class="form-control form-control-sm fs-1-5rem" type="password" name="reg_passwdC" placeholder="Confirmar contraseña nueva" required>
                            </div>
                        </div>
                    </fieldset>

                    <div class="center-text"> 
                        <button class="btn btn-primary fs-1-5rem" type="submit">Cambiar contraseña</button>
                    </div>
    
                </form>
            </section> <!-- Main-profile-container -->
        </div> <!-- Main-container -->
    </main>
@endsection