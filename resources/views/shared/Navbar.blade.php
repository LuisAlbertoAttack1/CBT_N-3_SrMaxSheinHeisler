<nav class="navbar navbar-expand-lg bg-light border-bottom border-success border-3 shadow-lg bg-body-tertiary" id="navbar">
  <div class="container text-center">
    <a class="navbar-brand text-success card-nav" href="/"><h6 class="mt-1"><img class="me-2" src="{{ asset('img/logocbt3.webp') }}" alt="Logo" width="25px"> <b>CBT 3 Sr Max Shein Heister</b></h6></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
      </ul>
      <ul class="navbar-nav">
        <!--Espacio vacio para acomodo de menu-->
        <li class="nav-item">
        </li>
        <!--Espacio vacio para acomodo de menu-->
        <li class="nav-item card-nav">
          <a class="nav-link" href="{{route('panel')}}"><h6><i class="fa-solid fa-gears me-2" style="color:#219711"></i><b>Panel de control</b></h6></a>
        </li>
      </ul>
      <!--Espacio vacio para acomodo de menu-->
      <ul class="navbar-nav mx-auto">
      </ul>
      <!--Espacio vacio para acomodo de menu-->
      <ul class="navbar-nav mx-auto border-0">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user me-2"></i><b>{{Auth::user()->usuario}}</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" class="border-0">
            <li><h class="dropdown-item text-center text-muted" href="#"><b>{{$infoUsuario->puesto }}</b></h></li>
            <li><a class="dropdown-item text-muted" href="#"><b>{{$infoUsuario->nombre }} {{$infoUsuario->apellido_paterno}} {{$infoUsuario->apellido_materno}}</b></a></li>
            <li><a href="{{route('cerrar.sesion')}}" class="btn btn-outline-danger w-100 border-0"><i class="fas fa-power-off me-2"></i>Cerrar Sesion</a></li>
          </ul>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>