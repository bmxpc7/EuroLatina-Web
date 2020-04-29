<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- W3 CSS-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- DataTable CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Hello, world!</title>
            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
      <div class="encabezado">
        @yield('encabezado')
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#"><img src="/images/logo-Mini.png" alt="" height="42" width="42">
          EuroLatina</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"><button class="w3-btn w3-round-xxlarge w3-orange">Home</button><span class="sr-only">(current)</span></a>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><button class="w3-btn w3-round-xxlarge w3-orange">Estadisticas</button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/maquina/create"><button class="w3-btn w3-round-xxlarge w3-orange">Maquinas</button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/pieza/create"><button class="w3-btn w3-round-xxlarge w3-orange">Piezas</button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/users/create"><button class="w3-btn w3-round-xxlarge w3-orange">Usuarios</button></a>
              </li>
              
              
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="w3-button w3-orange w3-border w3-border-black w3-round-large" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
      </div>
      <div class="contenido">
        @yield('contenido')
      </div>
      <div class="pie bg-dark text-white">
    @yield('pie')
        <div class="container">
          <div class="row">
            <div class="col-sm-2 mt-2">
            </div>
            <div class="col-sm-2 mt-2">
              Contacto
            </div>
            <div class="col-sm-4 mt-3">
              EuroLatina 2020®
            </div>
            <div class="col-sm-2 mt-2">
              Redes Socia
            </div>
            <div class="col-sm-2 mt-2">
            </div>
          </div>
        </div>
      </div>
  </body>
</html>