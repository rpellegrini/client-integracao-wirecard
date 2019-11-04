<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Integração - Wirecard</title>
  </head>
  <body>
  <div class="content">

  <!-- ### Menu ### -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Wirecard</a>
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('customer.index') }}">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.index') }}">Pedidos</a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Ação</a>
          <a class="dropdown-item" href="#">Outra ação</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Algo mais aqui</a>
        </div>
      </li>-->
    </ul>
  </div>
</nav>

@yield('content')
</div>

@section('scripts')
   @include('core.scripts')
   @parent
 @show
  </body>
</html>
