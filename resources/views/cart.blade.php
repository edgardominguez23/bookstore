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
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-green-400 rounded">
                <div class="alert alert-success">{{ $message }}</div>
            </div>
        @endif
        <h3 class="mt-3">Lista de productos en el carrito</h3>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Titulo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Price</th>
                <th scope="col">Remover</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button class="btn btn-danger">x</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row">Total:</th>
                    <td colspan="0">${{ Cart::getTotal() }}</td>
                </tr>
                <tr>
                    <th colspan="0" class="pr-1">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger">Remover todo</button>
                        </form>
                    </th>
                </tr>
            </tbody>
          </table>
    </div>
</body>
</html>