<?php
	require_once("../conexion.php");
	if (isset($_GET['id_borrar'])) {
        include("borrar.php");
        header('Location: index.php');
	}
?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link  rel="icon"   href="img/logomoon.png" type="../image/png">
     <link rel="stylesheet" type="text/css" href="../css/estilo.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
     integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <a class="navbar-brand" href="../index.php">Moonlight</a>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle text-white" type="button" id="dropdownMenu1" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Filtros<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="padding-left:20px">
                    <li>
				        <a href="index.php?usuario=todos">Todos</a>
			        </li>
			        <li>
			        	<a href="index.php?usuario=verificado">Verificados</a>
			        </li>
			        <li>
			        	<a href="index.php?usuario=No verificado">No verificados</a>
			        </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="mx-auto my-auto col-lg-6 col-md-8">
                        <input class="form-control col-lg-12" type="text" name="buscar" id="buscador" placeholder="Buscar" aria-label="Buscar">
                </form>
                <!--Modal Añadir Libro-->
        </nav>
	</header>
	<div class="container">
		<div class="row">
    		<div class=" libros-todos col-lg-11 col-sm-11 col-md-11 mx-auto mt-5 rounded">
				<?php
                    include('filtros.php');
                    include('usuarios.php');
				?>
            </div>
		</div>
	</div>

    <script src="../js/jquery.js"></script>
    <script src="../js/cambio.js"></script>
</body>
</html>