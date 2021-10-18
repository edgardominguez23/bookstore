@extends('layouts.app')

@section('content')
<div class="container">
    <br>  <p class="text-center">El mejor sitio web donde encontrarás libros al mejor precio <a href="/"> BookStore</a></p>
    <hr>
    
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <header class="card-header">
        <a href="/login" class="float-right btn btn-outline-primary mt-1">Log in</a>
        <h4 class="card-title mt-2">Registrate</h4>
    </header>
    <article class="card-body">

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-row">
            <div class="col form-group">
                <label for="name">{{ __('Name') }}</label>   
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @else
                <small class="form-text text-muted">Nosotros no debemos compartir nuestro email con alguien mas.</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> 

        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> 
                {{ __('Register') }}
            </button>
        </div>               
    </form>

    </article> 
    <div class="border-top card-body text-center">Tienes una cuenta? <a href="/login">Log In</a></div>
    </div> 
    </div> 
    
    </div>
    
    </div> 
    <br><br>
@endsection
