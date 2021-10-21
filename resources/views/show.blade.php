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
<body id="img-fondo">
    @include('layouts.nav-header')
    <div class="container">
        <h1 class="mt-3 mb-5 text-center font-weight-bold">{{$book->title}}</h1>
        <div class="row">
            <div class="img-center col-sm-5">
                <img id="pictureImg" class="img text-center mt-5 mb-5" src="{{$book->picture}}" alt="Responsive image">
            </div>
            <div class="col-sm-7" style="background-color:#6897bb70; border-radius: 15px;">
                <h2 class="mt-4 font-weight-bold">Descripción</h2>
                <p id="sizeWord" class="mt-5 mb-5">{{$book->description}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $book->id }}" name="id">
                    <input type="hidden" value="{{ $book->title }}" name="title">
                    <input type="hidden" value="{{ $book->picture }}"  name="picture">
                    <input type="hidden" value="{{ $book->price }}"  name="price">
                    <input type="hidden" value="1" name="quantity">
                    <button class="btn btn-success mb-5">Agregar al carrito</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mb-4" style="background-color: rgba(203, 206, 22, 0.63); border-radius: 10px;">
                <h2 class="mt-4" >Información del libro</h2>
                <p class="mt-4"><b>Autor:</b>  {{$book->author}}</p>
                <p class="mt-4"><b>Editorial:</b>  {{$book->editorial}}</p>
                <p class="mt-4"><b>Precio:</b>  ${{$book->price}}</p>
                <p class="mt-4"><b>Lenguage:</b>  {{$book->lenguage}}</p>
            </div>
            <div class="col-sm-8 mt-5">

            </div>
        </div>
    </div>
    <br><br><br><br>
    @include('layouts.footer')
</body>
</html>