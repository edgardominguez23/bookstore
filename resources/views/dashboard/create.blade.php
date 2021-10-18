@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Agregar Libro</h4>
    </div>
    <div class="card-body ml-5 mr-5 pr-5 pl-5">
        <form action="{{ route( "book.store" )}}" method="post">

            @include('dashboard._form')
        
        </form>
    </div>
@endsection