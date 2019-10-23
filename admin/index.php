<?php
session_start();
if (isset($_SESSION['usuario'])) {
  if ($_SESSION['usuario']['tipoUsuario'] != "admin") {
    header("location: ../usuario/");
  }
} else {
  header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Moonlight</title>
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/main2.css" />
  <link rel="stylesheet" href="../css/footer3.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous" />


</head>


<header>
  <!-- En el nav Está el logo moonlight y el menú -->
  <nav class="navbar-light" id="nav">
    <div class="contenedor-nav">
      <div class="logo">
        <a href="index.php"> <img src="../img/moonlight.png" alt="" /></a>
        <!--cambiar por un icono de volver hacia atras-->
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
      <a href="../carrito2.php" id="enlaces-libros" class="btn-header" style="margin-bottom: 15px"><span class="fa fa-cart-plus " style="font-size: 20px;padding-top: 5px;" ></span></a>
        <a href="../ABM/" id="enlaces-libros" class="btn-header" style="margin-bottom: 15px">ABM</a>
        <a href="../catalogo.php" id="enlaces-libros" class="btn-header" style="margin-bottom: 15px">Libros</a>
        <a href="../includes/salir.php" id="enlaces-sign" class="btn-header rounded">Cerrar sesion</a>
      </div>
      <div class="icono" id="open">
        <span>&#9776;</span>
      </div>
    </div>
  </nav>
  <!-- Fuera del nav pero en el header va a estar una presentacion a la pagina solo con texto -->
  <div class="titulo">
    <h1>Moonlight</h1>
    <br />
    <h2>Libreria Digital</h2>
  </div>
  <div class="container-fluid"></div>
</header>

<?php
include("../includes/main.html");

include("../includes/footer.html");
?>
<script src="main.js"></script>
<script src="../js/headerrr.js"></script>
<script src="buscador.js"></script>

</html>