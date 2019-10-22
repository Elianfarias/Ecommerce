<?php
session_start();
include_once("includes/conexion.php");
?>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/catalogo2.css" />
  <link rel="stylesheet" href="css/header2.css" />
  <link rel="stylesheet" href="css/footer3.css" />
</head>

<body>
  <nav class="navbar-light" id="nav" style="position: fixed !important;z-index: 100; background-color:white">
    <div class="contenedor-nav">
      <div class="logo">
        <a href="index.php"> <img src="img/moonlight.png" alt="" /></a>
      </div>
      <div class="enlaces" id="contenedorBuscador">
        <div class="row">
          <div class="col-lg-10 col-md-12 col-sm-12">
            <input type="text" class="form-control" id="busqueda" placeholder="Ingrese su busqueda.." />
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <button class="btn btn-outline-dark my-sm-0" id="buscar" type="submit">
              Buscar
            </button>
            <div></div>
          </div>
        </div>
        <div class="list-group position-absolute mt-1" id="listaBusqueda"></div>
      </div>
      <div class="enlaces" id="enlaces">
        <a href="catalogo.php" id="enlaces-libros" class="btn-header" style="margin-bottom: 15px">Libros</a>
        <a href="login.php" id="enlaces-login" class="btn-header">Iniciar sesion</a>
        <a href="register.php" id="enlaces-sign" class="btn-header rounded">Crea una cuenta</a>
      </div>
      <div class="icono" id="open">
        <span>&#9776;</span>
      </div>
    </div>
  </nav>
  <div class="container"><br></div>
  <div class="container">
    <?php
    include("librosArticulo.php");
    ?>
  </div>
  <?php
  include("includes/footer.html");
  ?>
  <script src="js/filtrosCatalogo3.js"></script>
  <script src="js/header.js"></script>
  <script src="js/buscador.js"></script>
</body>

</html>