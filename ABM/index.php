<?php
	require_once("conexion.php");
	if (isset($_GET['id_borrar'])) {
		include("borrar.php");
	}
	if (isset($_GET['id_modificado'])) {
  	 	echo '<script>alert("Registro modificado")</script>';
	}
?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link  rel="icon"   href="moonlight.png" type="image/png">
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!--Scripts Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
     integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Moonlight</title>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Moonlight ABM</a>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle text-white" type="button" id="dropdownMenu1" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Generos<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="nav-item ">
				        <a href="index.php?genero=todos"> Todos</a>
			        </li>
			        <li class="nav-item ">
			        	<a href="index.php?genero=Novela"> Novela</a>
			        </li>
			        <li class="nav-item ">
			        	<a href="index.php?genero=Politica">Politica</a>
			        </li>
			        <li class="nav-item ">
			        	<a href="index.php?genero=Biografia"> Biografia</a>
			        </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <input class="form-control col-lg-6 col-md-4 mx-auto" type="text" name="buscar" id="buscador" placeholder="Buscar" aria-label="Buscar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="insertar.php" data-toggle="modal" data-target="#exampleModal">Añadir libro</a>
                    </li>    
                </ul>
                <!--Modal Añadir Libro-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nuevo Libro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php include("insertar.php"); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit"  name="insertar" value="Insertar"  class="btn btn-primary">Añadir Libro</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
	</header>
	<div class="container">
		<div class="row">
    		<div class="contactos col-lg-12 ml-auto mr-auto">
				<?php
					include("filtros.php");
					include("libros.php");
				?>
			</div>
		</div>
	</div>	
    <script src="js/jquery.js"></script>
    <script src="js/cambio.js"></script>
</body>
</html>