@extends('layouts.base')

@section('contenido')
    <main>
        <div class="main-container">

            <section class="profile-banner-container">
                <div class="profile-banner-info">
                    <div class="banner user-posts">
                        <h2>{{$usuarioActual['posts']}}</h2> <br> posts <br> graznados
                    </div>
                    <div class="banner profile-banner-picture">
                        <a href="profile">{{$usuarioActual['name']}}</a>
                    </div>
                    <div class="banner user-reactions">
                        <h2>{{$usuarioActual['friendsnro']}}</h2> <br> amigos <br> buitres
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
                            <div class="profile-pfp">
                                <img src="storage/img/profiles/{{$usuarioActual['imagen']}}" alt="Tu foto de perfil"> <br>
                            </div>
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
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

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
                                    <textarea name="bio" value="{{ old('bio') }}" maxlength="250" placeholder="Una pequeña descripción sobre tí..." autocomplete="bio"></textarea>

                                    @error('bio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    </fieldset> <br>

                    <div class="form-group row">
                    <label for="fecha_nac" class="col-md-4 col-form-label text-md-right center-text"><b>{{ __('Fecha de Nacimiento') }}</b></label>

                            <div class="col-md-8">
                                <input class="form-control" type="date" id="fecha_nac" name="fecha_nac" value="{{ old('fecha_nac') }}" step="1" max="2002-12-31" required autocomplete="fecha_nac">
                            </div>
                        </div>
                        <br>

                        <div class="form-group row radios">

                            <div class="col-md-7 col-lg-4">
                                <input type="radio" id="m" name="genero" value="1">
                                <label for="m">Masculino</label>
                            </div>
                            <br>

                            <div class="col-md-7 col-lg-4">
                                <input type="radio" id="f" name="genero" value="2">
                                <label for="f">Femenino</label>
                            </div>

                        </div>
                    <br>
                    <div class="center-text">
                        <button class="btn btn-primary fs-1-5rem" type="submit">Actualizar</button>
                    </div>
                </form>
            </section>

            <!-- Contraseña -->
            <section class="main-profile-container">
                <form action="profile.php" method="POST">

                    <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right center-text"><strong> {{ __('Contraseña') }} </strong></label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right center-text"><strong> {{ __('Confirmar contraseña') }} </strong></label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                    <div class="center-text">
                        <button class="btn btn-primary fs-1-5rem" type="submit">Cambiar contraseña</button>
                    </div>

                </form>
            </section> <!-- Main-profile-container -->
        </div> <!-- Main-container -->
    </main>
@endsection
