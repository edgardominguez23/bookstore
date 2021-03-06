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

        <div class="row">

        <div class="col mt-5">
            <h3 class="mt-3 mb-5 text-center">Lista de productos en el carrito</h3>
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
                        <th scope="row">Envio:</th>
                        <td>
                            <select class="form-control" name="pets" id="selectEnvio">
                                <option value="1">Normal</option>
                                <option value="2">Rapido</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Subtotal:</th>
                        <td colspan="0">${{ Cart::getTotal() }}</td>
                    </tr>
                    <tr>
                        <th colspan="0" class="pr-1">
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Remover todo</button>
                            </form>
                        </th>
                        <td>
                            <button class="btn btn-warning" id="btnShow" class="btn btn-success btn-block" data-toggle="modal" data-target="#deleteModal" data-id="#payBooks">Informacion</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col mt-5">
            <form method="POST" action="{{ route('cart.pay') }}">
                @csrf
            <h3 class="mt-3 mb-5 text-center">Pago</h3>
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h4>Selecciones su metodo de pago:</h4>
                </div>
                <div class="col-sm-6">
                    <select class="form-control" name="pets" id="pet-select">
                        <option value="dog">Visa</option>
                        <option value="cat">Mastercard</option>
                    </select> 
                </div>
            </div>
            <div>
                <div class="col form-group">
                    <label for="cardnumber">Card Number</label> 
                    <input id="cardnumber" type="text" class="form-control" name="cardnumber">
                    @error('cardnumber')
                        <small class="text-danger">{{ $message}}</small>
                    @enderror
                </div>

                <div class="col form-group">
                    <label for="cardholder">Card Holder</label> 
                    <input id="cardholder" type="text" class="form-control" name="cardholder">
                    @error('cardholder')
                        <small class="text-danger">{{ $message}}</small>
                    @enderror
                </div>

                <div class="row mb-4">
                    <div class="col-sm-6">
                        <div class="col form-group">
                            <label for="expires">Expires</label> 
                            <input id="expires" type="text" class="form-control" name="expires">
                            @error('expires')
                                <small class="text-danger">{{ $message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col form-group">
                            <label for="cvc">CVC</label> 
                            <input id="cvc" type="text" class="form-control" name="cvc">
                            @error('cvc')
                                <small class="text-danger">{{ $message}}</small>
                            @enderror
                            @foreach ($cartItems as $item)
                                <input type="hidden" value="{{ $item->quantity}}" name="booksQ[]">
                                <input type="hidden" value="{{ $item->id}}" name="booksId[]">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-lg btn-block">Pagar</button>
            </div> 
            </form>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="modal-title" id="ModalLabel">
                <h5>Informacion importante de la compra</h5>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="mouse">
                <p id="varA"></p>
                <p id="varB"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>

    <script>
        window.onload = function(){

            const button = document.getElementById('btnShow');

            $('#deleteModal').on('show.bs.modal', function (event) {
                var cod = document.getElementById("selectEnvio").value;

                var modal = $(this)

                if(cod == 1){
                    modal.find('#varA').text("Costo de envio: $100")
                    modal.find('#varB').text("El total de la compra es: ${{Cart::getTotal() + 100}}")
                }else{
                    modal.find('#varA').text("Costo de envio: $300")
                    modal.find('#varB').text("El total de la compra es: ${{Cart::getTotal() + 300}}")
                }
            });
        };
    </script>
</body>
</html>