@extends('layouts.app')

@section('content')
<div class="container">
    <br>  <p class="text-center">El mejor sitio web donde encontrarás libros al mejor precio  <a href="/"> BookStore</a></p>
    <hr>
    
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <header class="card-header">
        <h4 class="card-title mt-2">Iniciar Sesion</h4>
    </header>
    <article class="card-body">

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-row">
            <div class="col form-group">
                <label for="email">{{ __('E-Mail Address') }}</label> 
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> 

        <div class="form-group">
            <label class="form-check form-check-inline" for="remember">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Remember Me') }}
            </label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> 
                {{ __('Login') }}
            </button>
        </div>               
    </form>

    </article> 
    </div> 
    </div> 
    
    </div>
    
    </div> 
    <br><br>
@endsection
