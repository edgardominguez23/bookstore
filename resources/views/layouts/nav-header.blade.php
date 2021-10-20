<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="/" style="text-decoration:none"><h3 class="text-white mr-5">BookStore</h3></a>
    <form class="form-inline my-2 my-lg-0 ml-5" action="{{route('home.search')}}" method="GET">
      <div class="input-group">
        <input type="search" class="form-control" placeholder="Libro" name="text"
        <div class="input-group-append">
          <button class="btn btn-warning" type="submit">Buscar</button>
        </div>
      </div>
    </form>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto"></ul>
      <ul class="navbar-nav">
        @if (Route::has('login'))
          @auth <!--Usuario autenticado-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cuenta
              </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <span class="dropdown-item">{{ Auth::user()->name }}</span>
                @if (Auth::user()->rol_id == 2)
                  <a class="dropdown-item" href="/admin">Administracion</a>
                @elseif (Auth::user()->rol_id == 3)
                  <a class="dropdown-item" href="/dashboard/book">Administracion</a>
                @else
                  <a class="dropdown-item" href="/historial-compras">Historial de compras</a>
                @endif
                <a class="dropdown-item" type="submit" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
            @else <!--Usuario no autenticado-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Identificate
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('login') }}">Log in</a>
                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
              </div>
            </li>
          @endauth
          <li class="nav-item">
            <a type="submit" class="btn btn-black" href="/cart">
              <span class="text-white mr-1">Carrito</span><span class="badge badge-success">{{ Cart::getTotalQuantity()}}</span>
              <span class="sr-only">unread messages</span>
            </a>
          </li>
        @endif
      </ul>
    </div>
</nav>