@extends('layouts.base')

@section('contenido')
<div class="main-container">
    <section class="main-title-container">
        <h1 class="text-center">
            {{ __('Registro') }}
        </h1>
    </section>

    <div class="main-signup-container row justify-content-center">
        <div class="col-md-10">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-8">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_nac" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                            <div class="col-md-8">
                                <input class="form-control" type="date" id="fecha_nac" name="fecha_nac" value="{{ old('fecha_nac') }}" step="1" max="2002-12-31" required autocomplete="fecha_nac">
                            </div>
                        </div>
                        <br>

                        <div class="form-group row radios">

                            <div class="col-md-7 col-lg-4">
                                <input type="radio" id="m" name="genero" value="m">
                                <label for="m"> Masculino</label>
                            </div>
                            <br>
                            <div class="col-md-7 col-lg-4">
                                    <input type="radio" id="o" name="genero">
                                    <label for="o">Personalizado</label>
                                    <input class="form-control" type="text" name="genero">
                                    <!-- Habría que poner acá un pequeño campo para ingresar el genero con un Script acá para que aparezca al seleccionar esta opción -->
                            </div>
                            <br>
                            <div class="col-md-7 col-lg-4">
                                <input type="radio" id="f" name="genero" value="f">
                                <label for="f">Femenino</label>
                            </div>

                        </div>

                        <br>
                        <div class="form-group row mb-0 justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-primary fs-1-5rem">
                                    Registrar
                                </button>
                            </div>
                        </div>
                        <br>
                    </form>


        </div>
    </div>
</div>
@endsection
