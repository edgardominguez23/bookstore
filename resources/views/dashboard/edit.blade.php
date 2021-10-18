@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Actualizar Libro con id: {{$book->id}}</h4>
    </div>
    <div class="card-body ml-5 mr-5 pr-5 pl-5">
        <form action="{{ route( "book.update",$book->id )}}" method="post">
            @method('put')
            @include('dashboard._form')
        </form>
    </div>

    <br>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Imagen de Libro</h4>
        </div>
        <div class="card-body">
            <form action="{{ route( "book.picture",$book->id )}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <input type="file" name="picture" class="form-control">
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="Subir">
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-3">
                    <img class="w-100" src={{"http://bookstore.test/". $book->picture}}>
                </div>
            </div>
        </div>
    </div>
@endsection