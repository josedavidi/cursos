<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LaraVue</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('inicio')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('service')}}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('acercons')}}">Acercons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('infinite')}}">Infinite Loading</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="{{route('login')}}">Login</a>
      </span>
    </div>
  </div>
</nav>