<nav class="navbar navbar-expand-lg  fondohesego mt-2">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Hesego</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="{{route('dashboard.index')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('orders.index')}}">Ordenes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usurio:<b> {{auth()->user()->username}} </b>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login.logout')}}">Cerrar Sesion</a></li>
            </ul>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>-->

      </div>
    </div>
</nav>
