<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{ config('app.name', 'journal_app') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!--bootstrap-->
    <!--CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Styles -->
    <link href="{{ secure_asset('css/application.css') }}" rel="stylesheet">

  </head>

<body>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
  
  <script src="{{ secure_asset('js/navbar.js') }}"></script>
  
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar__brand" href="{{ url('admin') }}"></a><p class="navbar-text font-weight-light navbar__title">admin page</p>
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
  
  @yield('content')
  
  @yield('footer')
  
  
</body>
</html>