@extends('layouts.base')

@section('contenido')
<div class="main-container">
   
    <section class="main-title-container">
        <h1 class="text-center">
            {{ __('Ingresar') }}
        </h1>
    </section>

    <section class="main-login-container row justify-content-center"> 
        <div class="col-md-10">
            <form method="POST" action="{{ route('login') }}">
            @csrf

                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right fs-1-5rem">{{ __('Usuario') }}</label>

                    <div class="col-md-8">
                        <input id="username" type="username" class="form-control @error('email') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                                
                    </div>
                </div>  

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right fs-1-5rem">{{ __('Contraseña') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label fs-1-5rem" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-2 center-text">
                        <button type="submit" class="btn btn-primary fs-1-5rem">
                            {{ __('Ingresar') }}
                        </button>
                        <br> <br>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Olvidó su contraseña?') }}
                        </a>
                        @endif
                    </div>
                </div>

            </form>

        </div> <!--col-md-8-->
    </section>
    
</div> <!--main-container-->
@endsection
