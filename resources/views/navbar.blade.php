@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar__brand navbar__mainLogo" href="/"></a><p class="navbar-text font-weight-light navbar__title">journal myself</p>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-md-auto align-items-end">
          <li class="nav-item">
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-contol mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Home   <i class="fas fa-user fa-lg"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="/posts/new">write   <i class="fas fa-pen fa-lg"></i></a></li>
        </ul>
      </div>
    </div>
</nav>
@endsection