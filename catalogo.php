<?php
session_start();
include_once("includes/conexion.php");

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Moonlight</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/catalogo2.css" />
    <link rel="stylesheet" href="css/headerSolo.css" />
    <link rel="stylesheet" href="css/footer3.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
  <body>
  <?php
  if (isset($_SESSION['usuario'])) {
    include("includes/headerUsuario.html");
  }else{
  ?>
<!-- Inicio de nav-->
<nav class="navbar-light" id="nav" style="position: fixed !important;z-index: 100">
    <div class="contenedor-nav">
      <div class="logo">
        <a href="index.php"> <img src="img/moonlight.png" alt=""/></a>
      </div>
      <div class="enlaces" id="contenedorBuscador"> 
        <div class="row">
          <div class="col-lg-10 col-md-12 col-sm-12">
            <input
              type="text"
              class="form-control"
              id="busqueda"
              placeholder="Ingrese su busqueda.."
            />
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <button
              class="btn btn-outline-dark my-sm-0"
              id="buscar"
              type="submit"
            >
              Buscar
            </button>
            <div></div>
          </div>
        </div>
        <div class="list-group position-absolute mt-1" id="listaBusqueda"></div>
      </div>
      <div class="enlaces" id="enlaces">
        <a href="catalogo.php" id="enlaces-libros" class="btn-header" style="margin-bottom: 15px"
          >Libros</a
        >
        <a href="login.php" id="enlaces-login" class="btn-header"
          >Iniciar sesion</a
        >
        <a href="register.php" id="enlaces-sign" class="btn-header rounded"
          >Crea una cuenta</a
        >
      </div>
      <div class="icono" id="open">
        <span>&#9776;</span>
      </div>
    </div>
  </nav>
  <?php } ?>
<!--Fin de Nav-->
<!-- Inicio de Slider -->
<div id="carouselExampleControls" class="carousel slide slider" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <img class="d-block slider" style="min-width:100%" src="img/slider/sliderImagen3.png" height="60%" alt="First slide">
    </div>
    <div class="carousel-item active">
      <img class="d-block slider" style="min-width:100%" src="img/slider/sliderImagen2.jpg" height="60%" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block slider" style="min-width:100%" src="img/slider/sliderImagen6.jpg" height="60%" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Fin de Slider -->

  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center my-5">
        <h2>Libros</h2>
      </div>
    </div>
    <div class="row" >
      <div class="col-lg-12 col-md-12 col-sm-12 text-center contenedorCatalogo ml-auto text-white" role="group" >
        <a  class="btn btn-secondary btn-lg genero col-lg-2 col-md-12  col-sm-12 contenedorCatalogo" role="button"  data-genero="todos" aria-pressed="true">Todos</a>
        <a  class="btn btn-secondary btn-lg genero col-lg-2 col-md-12  col-sm-12 contenedorCatalogo" role="button" data-genero="biografia" aria-pressed="true">Biografias</a>
        <a  class="btn btn-secondary btn-lg genero col-lg-2 col-md-12  col-sm-12 contenedorCatalogo" role="button" data-genero="politica" aria-pressed="true">Politica</a>
        <a  class="btn btn-secondary btn-lg genero col-lg-2 col-md-12  col-sm-12 contenedorCatalogo" role="button"  data-genero="novela" aria-pressed="true">Novela</a>
        <a  class="btn btn-secondary btn-lg genero col-lg-3 col-md-12  col-sm-12 contenedorCatalogo" role="button"  data-genero="literaturainfantil" aria-pressed="true">Literatura Infantil</a>
      </div>
    </div>
    <br>
    <hr><br>
    <div class="row" id="librosCatalogo">
    </div>
  </div>
  <?php
  include("includes/footer.html");
?>  
<script src="js/filtrosCatalogo3.js"></script>
  <script src="js/header.js"></script>
  <script src="js/buscador.js"></script>
</body>

</html>