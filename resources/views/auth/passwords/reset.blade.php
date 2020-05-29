@extends('layouts.base')

@section('contenido')
<div class="main-container">
    <section class="main-title-container">
        <h1 class="text-center">
            {{ __('Reiniciar Contraseña') }}
        </h1>
    </section>

    <div class="main-index-container row justify-content-center">
        
        <div class="col-md-10">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row reset-pass-email">
                    <label for="email" class="col-md-4 col-form-label text-md-right"><strong>{{ __('E-Mail') }}</strong></label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Contraseña') }}</strong></label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Confirmar Contraseña') }}</strong></label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <br>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4 center-text">
                        <button type="submit" class="btn btn-primary fs-1-5rem">
                            {{ __('Reiniciar Contraseña') }}
                        </button>
                    </div>
                </div>
            </form>
                   
                
        </div>
        
    </div>
</div>
@endsection
