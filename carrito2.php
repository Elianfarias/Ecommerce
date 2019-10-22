<?php 
session_start();
include("includes/logicaCarrito.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <title>Moonlight</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/catalogo2.css" />
    <link rel="stylesheet" href="css/headerSolo.css" />
    <link rel="stylesheet" href="css/footer3.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<?php 

if(isset($_SESSION['usuario'])){
	include("includes/headerUsuario.html");
	if(isset($_SESSION['carrito'])){	
        ?>
        <div class="container">
        <div class="row">
            <div class="col-lg-6" style="margin-top:150px">
                <span class="h4"> Mi Carrito </span>
            </div>
            <div class="col-lg-6 text-right" style="margin-top:150px">
                <a href="carrito3.php" class="h5">ver carrito</a><br><br>
            </div>
        </div>	
        <?php 
		if(isset($_GET['id'])){
		//ingresa un nuevo producto o un producto existente para actualizar cantidad
		$existe=buscarSiProductoExiste($_GET['id']);
			if($existe==0){
				//ingresa un nuevo producto
				agregarNuevoProducto($_GET['id']);
			}
		mostrarProductosCarrito();		
		
		}else {
		//entramos a ver carrito
		mostrarProductosCarrito();
		}
		
		echo '<div class="row text-center" style="width:100%;> <div class="col-lg-6"><a href="comprar.php">Finalizar compra</a><br></div></div>';
		
	}elseif(isset($_GET['id'])){
		// COMO NO EXISTE $_SESSION['carrito'] quiere decir que ingresa el primer producto al carrito
		agregarPrimerProducto($_GET['id']);
		mostrarProductosCarrito();
		echo ' <a href="comprar.php">Finalizar compra</a>  <br>';
		}else{
			echo 'carrito vacio'.'<br>';
		}
	
	echo '<div class="row text-center" style="width:100%;> <div class="col-lg-6"><a href="catalogo.php">Seguir viendo productos</a> </div> </div>';

}else{
	//si no existe $_SESSION['usuario']
	echo 'debes iniciar sesion para utilizar el carrito <a href="login.php">Iniciar Sesion</a>';
}

 ?>

</div>

</body>
</html>