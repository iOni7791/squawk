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
                    <label for="email" class="col-md-4 col-form-label text-md-right fs-1-5rem center-text"> <strong> {{ __('E-mail') }}</strong></label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control fs-1-5rem @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                                
                    </div>
                </div>  

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right fs-1-5rem center-text"> <strong> {{ __('Contraseña') }}</strong></label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control fs-1-5rem @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-4 center-text">
                        <div class="form-check remember">
                            <br>
                            <div class="checkem">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                            <br>
                            <label class="form-check-label fs-1-5rem" for="remember">
                                <small data-toggle="button" class="btn btn-outline-light fs-1-5rem"> {{ __('Recordarme') }} </small>
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-2 center-text">
                        <button type="submit" class="btn btn-primary fs-1-5rem">
                            {{ __('Ingresar') }} <i class="fa fa-sign-in fs-1-5rem" aria-hidden="true"></i>
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
