<?php 
session_start();
include("includes/libreria.php");
//Agregamos sumar, restar  y eliminar productos del carrito,
// Modificamos al comprobar la existencia de $_SESSION['carrito']*/
 ?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Carrito</title></head>
<body><h2>Carrito</h2>
<?php 
if(isset($_SESSION['usuario'])){
	if(isset($_SESSION['carrito'])){	
		if(isset($_GET['id'])){
		//ingresa un nuevo producto o un producto existente para actualizar cantidad
		$existe=buscarSiProductoExite($_GET['id']);
			if($existe==0){
				//ingresa un nuevo producto
				agregarNuevoProducto($_GET['id']);
			}
		}
		if(isset($_GET['id_suma'])){
			sumarCantidad($_GET['id_suma']);
		}
		if(isset($_GET['id_resta'])){
			restarCantidad($_GET['id_resta']);
		}
		if(isset($_GET['id_borra'])){
			eliminarProdCarrito($_GET['id_borra']);
		}	
		mostrarProductosCarrito();	
		if(isset($_SESSION['carrito'])){	
		echo '<a href="comprar.php">Finalizar compra</a><br>';
		}	
	}elseif(isset($_GET['id'])){
		// COMO NO EXISTE $_SESSION['carrito']
		//quiere decir que ingresa el primer producto al carrito
		agregarPrimerProducto($_GET['id']);
		mostrarProductosCarrito();
		echo '<a href="comprar.php">Finalizar compra</a><br>';
		}else{
			echo 'carrito vacio'.'<br>';
		}	
	echo '<a href="./">Seguir viendo productos</a>';
}else{
	//si no existe $_SESSION['usuario']
	echo 'debes iniciar sesion para utilizar el carrito
		  <a href="login.php">Iniciar Sesion</a>';
}
 ?>
</body>
</html>