<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
          <div class="d-block w-100 bg-success">
              <div class="col-sm">
                <a href="{{ route('home.show',$result[0]->id) }}" class="btn mb-1">
                  <img id="imagen" class="img text-center mt-2 mb-2" src="{{$result[0]->picture}}" alt="Responsive image">
                </a>
                <p>{{$result[0]->title}}</p>
                <p>${{$result[0]->price}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $result[0]->id }}" name="id">
                    <input type="hidden" value="{{ $result[0]->title }}" name="title">
                    <input type="hidden" value="{{ $result[0]->picture }}"  name="picture">
                    <input type="hidden" value="{{ $result[0]->price }}"  name="price">
                    <input type="hidden" value="1" name="quantity">
                    <button class="btn btn-primary mb-5">Agregar al carrito</button>
                </form>
              </div>
          </div>
      </div>
      <div class="carousel-item">
        <div class="d-block w-100 bg-warning">
            <div class="col-sm">
                <a href="{{ route('home.show',$result[1]->id) }}" class="btn mb-1">
                  <img id="imagen" class="img text-center mt-2 mb-2" src="{{$result[1]->picture}}" alt="Responsive image">
                </a>
                <p>{{$result[1]->title}}</p>
                <p>${{$result[1]->price}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $result[1]->id }}" name="id">
                    <input type="hidden" value="{{ $result[1]->title }}" name="title">
                    <input type="hidden" value="{{ $result[1]->picture }}"  name="picture">
                    <input type="hidden" value="{{ $result[1]->price }}"  name="price">
                    <input type="hidden" value="1" name="quantity">
                    <button class="btn btn-primary mb-5">Agregar al carrito</button>
                </form>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-block w-100 bg-danger">
            <div class="col-sm">
                <a href="{{ route('home.show',$result[2]->id) }}" class="btn mb-1">
                  <img id="imagen" class="img text-center mt-2 mb-2" src="{{$result[2]->picture}}" alt="Responsive image">
                </a>
                <p>{{$result[2]->title}}</p>
                <p>${{$result[2]->price}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $result[2]->id }}" name="id">
                    <input type="hidden" value="{{ $result[2]->title }}" name="title">
                    <input type="hidden" value="{{ $result[2]->picture }}"  name="picture">
                    <input type="hidden" value="{{ $result[2]->price }}"  name="price">
                    <input type="hidden" value="1" name="quantity">
                    <button class="btn btn-primary mb-5">Agregar al carrito</button>
                </form>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-block w-100 bg-info">
            <div class="col-sm">
                <a href="{{ route('home.show',$result[3]->id) }}" class="btn mb-1">
                  <img id="imagen" class="img text-center mt-2 mb-2" src="{{$result[3]->picture}}" alt="Responsive image">
                </a>
                <p>{{$result[3]->title}}</p>
                <p>${{$result[3]->price}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $result[3]->id }}" name="id">
                    <input type="hidden" value="{{ $result[3]->title }}" name="title">
                    <input type="hidden" value="{{ $result[3]->picture }}"  name="picture">
                    <input type="hidden" value="{{ $result[3]->price }}"  name="price">
                    <input type="hidden" value="1" name="quantity">
                    <button class="btn btn-primary mb-5">Agregar al carrito</button>
                </form>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-block w-100 bg-secondary">
            <div class="col-sm">
                <a href="{{ route('home.show',$result[4]->id) }}" class="btn mb-1">
                  <img id="imagen" class="img text-center mt-2 mb-2" src="{{$result[4]->picture}}" alt="Responsive image">
                </a>
                <p>{{$result[4]->title}}</p>
                <p>${{$result[4]->price}}</p>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $result[4]->id }}" name="id">
                    <input type="hidden" value="{{ $result[4]->title }}" name="title">
                    <input type="hidden" value="{{ $result[4]->picture }}"  name="picture">
                    <input type="hidden" value="{{ $result[4]->price }}"  name="price">
                    <input type="hidden" value="1" name="quantity">
                    <button class="btn btn-primary mb-5">Agregar al carrito</button>
                </form>
            </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>