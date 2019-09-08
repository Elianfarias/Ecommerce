<?php include("conexion.php");
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
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
    <link rel="stylesheet" href="../css/catalogo2.css" />
    <link rel="stylesheet" href="../css/header3.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
  <body>
<?php 
include("header.html");
?>  
<div class="mt-5"></div>
  <div class="container"  >
    <div class="row" >
      <div class="col-lg-12 col-md-6 col-sm-4 text-center contenedorCatalogo mx-auto" >
        <a  class="btn btn-primary  btn-lg genero col-lg-2 col-md-6 col-sm-12 contenedorCatalogo" role="button"  data-genero="todos" aria-pressed="true">Todos</a>
        <a  class="btn btn-primary btn-lg genero col-lg-2 col-md-6 col-sm-12 contenedorCatalogo" role="button" data-genero="Biografia" aria-pressed="true">Biografias</a>
        <a  class="btn btn-primary btn-lg genero col-lg-2 col-md-6 col-sm-12 contenedorCatalogo" role="button" data-genero="Politica" aria-pressed="true">Politica</a>
        <a  class="btn btn-primary  btn-lg genero col-lg-2 col-md-6 col-sm-12 contenedorCatalogo" role="button"  data-genero="Novela" aria-pressed="true">Novela</a>
        <a  class="btn btn-primary btn-lg genero col-lg-2 col-md-6 col-sm-12 contenedorCatalogo" role="button"  data-genero="Literatura" aria-pressed="true">Literatura</a>
      </div>
    </div>
    <br><hr><br>
    <div class="row" id="librosCatalogo">
		</div>
  </div>
<?php 
  include("footer.html");
?>  
  <script src="../js/header.js"></script>
  <script src="../js/filtrosCatalogo2.js"></script>
</body>
</html>
