<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/catalogo.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
      
  <header>
    <!-- En el nav Está el logo moonlight y el menú -->
    <nav class="navbar navbar-light" id="id1">
      <div class="contenedor-nav">
        <div class="logo">
          <a href="index.php"> <img src="img/moonlight.png" alt=""/></a><!--cambiar por un icono de volver hacia atras-->
        </div>
        <div class="enlaces">
        <div class="row ">
  <div class="col-lg-10">
    <input type="text" class="form-control" placeholder="Buscar">
  </div>
  <div class="col-lg-2">
  <button class="btn btn-outline-dark my-sm-0" type="submit">Search</button>
  </div>
  </div>
 
  </div>
        <div class="enlaces" id="enlaces">
        
          <!-- <a href="#" id="enlaces-inicio" class="btn-header">Inicio</a> -->
          <a href="catalogo.php" id="enlaces-libros" class="btn-header ">Libros</a>

          <!-- <a href="#" id="encales-recomendados" class="btn-header"
            >Recomendados</a
          > -->
          <!-- <a href="#" id="encales-acerca" class="btn-header">Acerca de</a> Esto va al footer-->
          <a href="login.php" id="enlaces-login" class="btn-header">Iniciar sesion</a>
          <a href="register.php" id="enlaces-sign" class="btn-header">Crea una cuenta</a>
        </div>
        <div class="icono" id="open">
          <span>&#9776;</span>
        </div>
      </div>
    </nav>
    <!-- Fuera del nav pero en el header va a estar una presentacion a la pagina solo con texto -->  
  </header>
  <div class="mt-5"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="btn-group mx-auto" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-secondary">Todos</button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" 
              aria-haspopup="true" aria-expanded="false">Biografia</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="#">Autobiografia</a>
                <a class="dropdown-item" href="#">Diario Personal</a>
              </div>
            </div>
            <button type="button" class="btn btn-secondary">Politica</button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" 
              aria-haspopup="true" aria-expanded="false">Novela</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="#">Biografia</a>
                <a class="dropdown-item" href="#">Politica</a>
                <a class="dropdown-item" href="#">Novela</a>
                <a class="dropdown-item" href="#">Literatura Infantil</a>
              </div>
            </div>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" 
              aria-haspopup="true" aria-expanded="false">Literatura Infantil</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="#">Biografia</a>
                <a class="dropdown-item" href="#">Politica</a>
                <a class="dropdown-item" href="#">Novela</a>
                <a class="dropdown-item" href="#">Literatura Infantil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/campeones.js"></script>
  <script src="js/buscador.js"></script>
</body>
</html>
