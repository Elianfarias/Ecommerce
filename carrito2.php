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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


<?php 

if(isset($_SESSION['usuario'])){
	?>
	<nav class="navbar-light" id="nav" style="position: fixed !important;z-index: 100;background-color:white;">
  		<div class="contenedor-nav">
    		<div class="logo">
      			<a href="usuario/index.php"> <img src="img/moonlight.png" alt="" /></a>
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
      			<div class="list-group position-absolute mt-1" id="listaBusqueda">
				</div>
    		</div>
    		<div class="enlaces" id="enlaces">
      			<a href="carrito.php" id="enlaces-libros" class="btn-header" style="margin-bottom: 15px"><span class="fa fa-cart-plus " style="font-size: 20px;padding-top: 5px;" ></span></a>
      			<a href="includes/salir.php"  class="btn-header rounded">Cerrar sesion</a>
    		</div>
    		<div class="icono" id="open">
 		    	<span>&#9776;</span>
    		</div>
  		</div>
	</nav>
	<?php
	if(isset($_SESSION['carrito'])){
		if (isset($_GET['id_suma'])) {
			sumarCantidad($_GET['id_suma']);
		}
		if (isset($_GET['id_resta'])) {
			restarCantidad($_GET['id_resta']);
		}
		if (isset($_GET['id_borra'])) {
			eliminarProdCarrito($_GET['id_borra']);
		}	
    ?>
    <div class="container">
    	<div class="row">
        	<div class="col-lg-6" style="margin-top:150px">
                <span class="h4"> Mi Carrito </span>
        	</div>
        	<div class="col-lg-6 text-right" style="margin-top:150px">
        	</div>
    	</div>	
        <?php 
		if(isset($_GET['id'])){
		$existe=buscarSiProductoExiste($_GET['id']);
			if($existe==0){
				
				agregarNuevoProducto($_GET['id']);
			}
		mostrarProductosCarrito();		
		
		}else {
		mostrarProductosCarrito();		
		}
		echo '<div class="row text-center mx-auto" style="width:100%;padding-bottom:10px;">
				<div class="col-lg-6 col-sm-6"><a href="carrito2.php?finalizar_compra=1" class="btn btn-primary">
					Finalizar compra
				  </a><br></div>
				  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Pago</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
							<p>Su compra ha sido realizada con exito!</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
					</div>';
		echo ' <div class="col-lg-6 col-sm-6"><button type="button" class="btn btn-primary">
		<a class="text-white text-decoration-none" href="catalogo.php">Seguir comprando</a>
	  </button></div></div>';
		if (isset($_GET['finalizar_compra'])) {
			comprar();
		}	
	}elseif(isset($_GET['id'])){
		?> <div class="container">
				<div class="row">
					<div class="col-lg-6" style="margin-top:150px">
						<span class="h4"> Mi Carrito </span>
					</div>
					<div class="col-lg-6 text-right" style="margin-top:150px">
					</div>
				</div> 
				
				<?php
		agregarPrimerProducto($_GET['id']);
		
		mostrarProductosCarrito();
		echo '<<div class="row text-center mx-auto" style="width:100%;padding-bottom:10px;">
		<div class="col-lg-6 col-sm-6"><a href="carrito2.php?finalizar_compra=1" class="btn btn-primary">
			Finalizar compra
		  </a><br></div>
				  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Pago</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        Su compra ha sido realizada con exito!
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
					</div>';
		echo ' <div class="col-lg-6 col-sm-6"><button type="button" class="btn btn-primary">
		<a class="text-white text-decoration-none" href="catalogo.php">Seguir comprando</a>
	  </button></div></div>';
		}else{
			echo '<div class="col-lg-12 h4 text-center" style="position:absolute;bottom:300px;" > Carrito vacio <br>
				 <a class="btn btn-primary mt-4" href="catalogo.php">Ir a comprar</a></div>';
		}
	

}else{
	echo 'Debes iniciar sesión para utilizar el carrito <a href="login.php">Iniciar Sesion</a>';
	
}
 ?>
</div>
<?php 
// include("includes/footer.html");
?>
<script src="js/buscador.js"></script>
<script src="js/header.js"></script>
</body>
</html>