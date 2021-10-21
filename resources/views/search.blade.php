<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BookStore</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">
    @include('layouts.nav-header')

    <div class="main mt-5">
        <div class="container">
          <h4 class="mb-4">Resultados para "{{$text}}"</h4>
          @if (count($books) > 0)
              @foreach ($books as $key => $book)
                @if (($key + 1) % 3 == 1)
                    <div class="row">
                @endif
              
                <div class="col-sm mr-1 mb-1">
                    <img id="imagen" class="img text-center mt-1" src="{{$book->picture}}" alt="Responsive image">
                    <p>{{$book->title}}</p>
                    <p>${{$book->price}}</p>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $book->id }}" name="id">
                        <input type="hidden" value="{{ $book->title }}" name="title">
                        <input type="hidden" value="{{ $book->picture }}"  name="picture">
                        <input type="hidden" value="{{ $book->price }}"  name="price">
                        <input type="hidden" value="1" name="quantity">
                        <button class="btn btn-primary mb-1">Agregar al carrito</button>
                    </form>
                </div>

                @if (($key + 1) % 3 == 0 || ($key + 1) == sizeof($books))
                    </div>
                @endif
              @endforeach
          @else
              <h1>No se encontraron resultados para su busqueda</h1>
          @endif
        </div>
    </div>
    <br><br><br><br>
    @include('layouts.footer')
</body>
</html>