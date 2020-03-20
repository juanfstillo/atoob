<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}">
   <img src="/images/atooblogo.jpg" alt="logo" style="width:70px;">
 </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Institucional
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-uppercase" href="{{ url('comision-directiva') }}">Comisión Directiva</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-uppercase" href="{{ url('mision-objetivos') }}">Misión y Objetivos</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-uppercase" href="{{ url('noticias') }}">Noticias <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-uppercase" href="{{ url('nun') }}">NUN | Nomenclador Único Nacional <span class="sr-only">(current)</span></a>
      </li>
      {{-- <li class="nav-item active">
        <a class="nav-link" href="#">Código de Ética <span class="sr-only">(current)</span></a>
      </li> --}}
      {{-- <li class="nav-item active">
        <a class="nav-link" href="#">Convenios <span class="sr-only">(current)</span></a>
      </li> --}}
      <li class="nav-item active">
        <a class="nav-link text-uppercase" href="{{ url('socios-regiones') }}">Socios | Regiones <span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
