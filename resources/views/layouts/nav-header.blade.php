<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h3 class="text-white mr-5">BookStore</h3>
    <form class="form-inline my-2 my-lg-0 ml-5">
      <div class="input-group">
        <input type="search" class="form-control" placeholder="Libro">
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
                Hola, indentificate
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('login') }}">Log in</a>
                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
              </div>
            </li>
          @endauth
          <li class="nav-item">
            <button type="button" class="btn btn-black">
              <span class="text-white mr-1">Carrito</span><span class="badge badge-success">0</span>
              <span class="sr-only">unread messages</span>
            </button>
          </li>
        @endif
      </ul>
    </div>
</nav>