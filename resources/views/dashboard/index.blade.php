@extends('layouts.app')
@section('content')
<div class="container">
    <a class="btn btn-success mt-5" href="{{route("book.create")}}"> 
        Crear
    </a>
    <h3 class="mt-3">Libros de la Editorial {{$editorial}}</h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Price</th>
            <th scope="col">Creacion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->author}}</td>
                <td>${{$item->price}}</td>
                <td>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('book.edit',$item->id) }}" class="btn btn-primary mb-1">
                        Editar
                    </a>
                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $item->id }}" class="btn btn-danger mb-1">
                       Eliminar
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
{{$books->links()}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Estas seguro de eliminar el libro seleccionado?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <form id="formDelete" action="{{ route('book.destroy',0 )}}" data-action="{{ route('book.destroy',0 )}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
</div>

<script>
    window.onload = function(){
        $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
    
        action = $('#formDelete').attr('data-action').slice(0,-1);
        
        $('#formDelete').attr('action',action + id)
        var modal = $(this)
        modal.find('.modal-title').text('Eliminar el libro con id: ' + id)
        });
    };
</script>
@endsection