@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="/">
        <img src="/images/diary_logo.png" class="d-inline-block align-top" alt="logo" />
        <p class="navbar-text">journal</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-md-auto">
          <li class="nav-item">
            <a class="nav-link" href="/users/{{ Auth::user()->id }}"><i class="fas fa-user" style="margin-right: 1em;"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts/select"><i class="fas fa-pen" style="margin-right: 1em;"></i>write</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
@endsection