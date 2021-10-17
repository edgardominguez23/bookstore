<ul class="nav nav-pills mt-1 bg-light" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-book-tab" data-toggle="pill" href="#pills-book" role="tab" aria-controls="pills-book" aria-selected="true">Libros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-inf-tab" data-toggle="pill" href="#pills-inf" role="tab" aria-controls="pills-inf" aria-selected="false">Infantil y Juvenil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-lit-tab" data-toggle="pill" href="#pills-lit" role="tab" aria-controls="pills-lit" aria-selected="false">Literatura y Ficcion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-text-tab" data-toggle="pill" href="#pills-text" role="tab" aria-controls="pills-text" aria-selected="false">De texto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-neg-tab" data-toggle="pill" href="#pills-neg" role="tab" aria-controls="pills-neg" aria-selected="false">Negocios e Inversiones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-comic-tab" data-toggle="pill" href="#pills-comic" role="tab" aria-controls="pills-comic" aria-selected="false">Comics</a>
    </li>
</ul>

<h1>Hola Mundo</h1>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-book" role="tabpanel" aria-labelledby="pills-book-tab">

      <div class="main">
        <div class="container">
          @if (sizeof($books) == 0)
              <h1>No hay libros disponibles en esta categoria</h1>
          @endif

          @foreach ($books as $book)
              @if ($book->id % 3 == 1)
                <div class="row">
              @endif
              
              <div class="col-sm mr-1 mb-1">
                <img id="imagen" class="img text-center mt-1" src="{{$book->picture}}" alt="Responsive image">
                <p>{{$book->title}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $book->id }}" name="id">
                  <input type="hidden" value="{{ $book->title }}" name="title">
                  <input type="hidden" value="{{ $book->picture }}"  name="picture">
                  <input type="hidden" value="1" name="quantity">
                  <button class="btn btn-primary mb-1">Agregar al carrito</button>
                </form>
              </div>

              @if ($book->id % 3 == 0 || $book->id == sizeof($books))
                </div>
              @endif
          @endforeach
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="pills-inf" role="tabpanel" aria-labelledby="pills-inf-tab">
      <div class="main">
        <div class="container">
          @if (sizeof($categA) == 0)
              <h1>No hay libros disponibles en esta categoria</h1>
          @endif
          @foreach ($categA as $key => $a)
              @if (($key + 1) % 3 == 1)
                <div class="row">
              @endif
              
              <div class="col-sm mr-1 mb-1">
                <img id="imagen" class="img text-center" src="{{$a->picture}}" alt="Responsive image">
                <p>{{$book->title}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $book->id }}" name="id">
                  <input type="hidden" value="{{ $book->title }}" name="title">
                  <input type="hidden" value="{{ $book->picture }}"  name="picture">
                  <input type="hidden" value="1" name="quantity">
                  <button class="btn btn-primary mb-1">Agregar al carrito</button>
                </form>
              </div>

              @if (($key + 1) % 3 == 0 || ($key + 1) == sizeof($categA))
                </div>
              @endif
          @endforeach
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="pills-lit" role="tabpanel" aria-labelledby="pills-lit-tab">
      <div class="main">
        <div class="container">
          @if (sizeof($categB) == 0)
              <h1>No hay libros disponibles en esta categoria</h1>
          @endif
          @foreach ($categB as $key => $b)
              @if (($key + 1) % 3 == 1)
                <div class="row">
              @endif
              
              <div class="col-sm mr-1 mb-1">
                <img id="imagen" class="img text-center" src="{{$b->picture}}" alt="Responsive image">
                <p>{{$book->title}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $book->id }}" name="id">
                  <input type="hidden" value="{{ $book->title }}" name="title">
                  <input type="hidden" value="{{ $book->picture }}"  name="picture">
                  <input type="hidden" value="1" name="quantity">
                  <button class="btn btn-primary mb-1">Agregar al carrito</button>
                </form>
              </div>

              @if (($key + 1) % 3 == 0 || ($key + 1) == sizeof($categB))
                </div>
              @endif
          @endforeach
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="pills-text" role="tabpanel" aria-labelledby="pills-text-tab">
      <div class="main">
        <div class="container">
          @if (sizeof($categC) == 0)
              <h1>No hay libros disponibles en esta categoria</h1>
          @endif
          @foreach ($categC as $key => $c)
              @if (($key + 1) % 3 == 1)
                <div class="row">
              @endif
              
              <div class="col-sm mr-1 mb-1">
                <img id="imagen" class="img text-center" src="{{$c->picture}}" alt="Responsive image">
                <p>{{$book->title}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $book->id }}" name="id">
                  <input type="hidden" value="{{ $book->title }}" name="title">
                  <input type="hidden" value="{{ $book->picture }}"  name="picture">
                  <input type="hidden" value="1" name="quantity">
                  <button class="btn btn-primary mb-1">Agregar al carrito</button>
                </form>
              </div>

              @if (($key + 1) % 3 == 0 || ($key + 1) == sizeof($categC))
                </div>
              @endif
          @endforeach
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="pills-neg" role="tabpanel" aria-labelledby="pills-neg-tab">
      <div class="main">
        <div class="container">
          @if (sizeof($categD) == 0)
              <h1>No hay libros disponibles en esta categoria</h1>
          @endif
          @foreach ($categD as $key => $d)
              @if (($key + 1) % 3 == 1)
                <div class="row">
              @endif
              
              <div class="col-sm mr-1 mb-1">
                <img id="imagen" class="img text-center" src="{{$d->picture}}" alt="Responsive image">
                <p>{{$book->title}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $book->id }}" name="id">
                  <input type="hidden" value="{{ $book->title }}" name="title">
                  <input type="hidden" value="{{ $book->picture }}"  name="picture">
                  <input type="hidden" value="1" name="quantity">
                  <button class="btn btn-primary mb-1">Agregar al carrito</button>
                </form>
              </div>

              @if (($key + 1) % 3 == 0 || ($key + 1) == sizeof($categD))
                </div>
              @endif
          @endforeach
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="pills-comic" role="tabpanel" aria-labelledby="pills-comic-tab">
      <div class="main">
        <div class="container">
          @if (sizeof($categE) == 0)
              <h1>No hay libros disponibles en esta categoria</h1>
          @endif
          @foreach ($categE as $key => $e)
              @if (($key + 1) % 3 == 1)
                <div class="row">
              @endif
              
              <div class="col-sm mr-1 mb-1">
                <img id="imagen" class="img text-center" src="{{$e->picture}}" alt="Responsive image">
                <p>{{$book->title}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{ $book->id }}" name="id">
                  <input type="hidden" value="{{ $book->title }}" name="title">
                  <input type="hidden" value="{{ $book->picture }}"  name="picture">
                  <input type="hidden" value="1" name="quantity">
                  <button class="btn btn-primary mb-1">Agregar al carrito</button>
                </form>
              </div>

              @if (($key + 1) % 3 == 0 || ($key + 1) == sizeof($categE))
                </div>
              @endif
          @endforeach
        </div>
      </div>
    </div>
</div>