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
    <div class="main">
        <div class="container">
          <h3 class="mb-5 mt-5">Historial de compras</h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Libro</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Estado</th>
                <th scope="col">Mensajeria</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($shoppings as $s)
                <tr>
                    <td scope="row">{{$s->book}}</td>
                    <td>{{$s->quantity}}</td>
                    <td>
                      @if ($s->status == 0)
                          Comprado
                      @elseif($s->status == 0)
                          En proveso de envio
                      @else
                          Entregado
                      @endif
                    </td>
                    <td>
                      @if ($s->id_mensajeria == 1)
                          DHL
                      @elseif($s->id_mensajeria == 2)
                          Fedex
                      @else
                          UPS
                      @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
</body>
</html>