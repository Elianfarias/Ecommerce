<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link  rel="icon"   href="img/logomoon.png" type="image/png">
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
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

    <title>Moonlight/editar</title>

</head>
<?php 
include("conexion.php");
include("redimensionarImagen.php");

$id_editar=$_REQUEST['id_editar'];
$sql="SELECT * FROM libro WHERE id='$id_editar'";
$consulta=mysqli_query($conexion, $sql);
$registro=mysqli_fetch_assoc($consulta);


	if (isset($_POST['editar'])) {
		$id_editar=$_REQUEST['id_editar'];
		$nombre=$_REQUEST['nombre'];
		$foto_previa=$registro['foto'];
		$escritor=$_REQUEST['escritor'];
		$editorial=$_REQUEST['editorial'];
		$isbn=$_REQUEST['isbn'];
		$genero=$_REQUEST['genero'];
		$publicacion=$_REQUEST['publicacion'];
		$stock=$_REQUEST['stock'];
		$descripcion=$_REQUEST['descripcion'];
		$subgenero=$_REQUEST['subgenero'];
		$precio=$_REQUEST['precio'];

		$foto_borrar="libros/$foto_previa";

		if(is_uploaded_file($_FILES['foto']['tmp_name']))
		{
			$nbr_foto=$_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],$nbr_foto);
			$nombre_imagen=redimensionarImagen($nbr_foto, 600, 1000);
			unlink($nbr_foto);
			unlink($foto_borrar);

			$sql="UPDATE libro SET foto='$nombre_imagen', nombre='$nombre', escritor='$escritor', editorial= '$editorial',isbn = '$isbn', genero = '$genero', subgenero = '$subgenero', publicacion = '$publicacion', stock = '$stock', descripcion = '$descripcion', precio = '$precio'
				WHERE id='$id_editar'";
		}	
		else{
			$sql="UPDATE libro SET nombre='$nombre', escritor='$escritor', editorial= '$editorial',isbn = '$isbn', genero = '$genero', subgenero = '$subgenero', publicacion = '$publicacion', stock = '$stock', descripcion = '$descripcion', precio = '$precio'
				WHERE id='$id_editar'";
		}

		$editar=mysqli_query($conexion, $sql)? header("location:index.php?id_modificado=$id_editar") : print('<script>alert("Error al modificar el registro. ")</script>');
	}


?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 mx-auto my-auto">
			<div class="row">
				<div class="col-lg-1 col-sm-1 mx-auto my-auto">
					<a href="index.php"><i class="fas fa-arrow-circle-left" style="font-size: 40px;"></i></a>
				</div>
				<div class="col-lg-11 col-sm-11 my-auto ">
					<h1 class="titulo">Editar libro: <?php echo $registro['nombre']?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 mx-auto shadow-lg p-3 mb-5 bg-white rounded">
					<form action="editar.php" method="post" enctype="multipart/form-data" >
					  <!--ENCTYPE SUBIR IMAGEN -->
					  <div class="img-insert col-lg-12">
					  		<?php 
					  			if (!empty($registro['foto'])) {
						   			echo '<img src="libros/'.$registro['foto'].'" width="150px" height="250px">';
					   			}else{
					   				echo '<img src="estandar.jpg" width="150px" height="250px">';
								} 
							?>	
						</div>
						<div class="col-lg-12">
							<br><br><input type="file" name="foto"  value="<?php echo $registro['foto'];?>"><br>
						</div>
						<div class="col-lg-12">
							<input type="hidden" class="float-right" name="id_editar" value="<?php echo $registro['id'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Nombre</label>
							<input type="text" class="float-right" name="nombre" value="<?php echo $registro['nombre'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Escritor</label>
							<input type="text" class="float-right" name="escritor" value="<?php echo $registro['escritor'];?>"><br>
						</div>	
						<div class="col-lg-12">	
							<label>Editorial</label>
							<input type="text" class="float-right" name="editorial" value="<?php echo $registro['editorial'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>ISBN</label>
							<input type="number" class="float-right" name="isbn" value="<?php echo $registro['isbn'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Genero</label>
							<select name="genero" class="float-right">
						<?php 
						switch ($registro['genero']) {
							case 'novela':
								echo '<option value="novela" selected>Novela</option>
							<option value="biografia">Biografia</option>
							<option value="fabula">Fabula</option>
							<option value="politica">Politica</option>
							<option value="literaturaInfantil">Literatura Infantil</option>';
								break;
							case 'biografia':
								echo '<option value="novela">Novela</option>
							<option value="biografia" selected>Biografia</option>
							<option value="fabula">Fabula</option>
							<option value="politica">Politica</option>
							<option value="literaturaInfantil">Literatura Infantil</option>';
								break;
							case 'fabula':
								echo '<option value="novela">Novela</option>
							<option value="biografia">Biografia</option>
							<option value="fabula" selected>Fabula</option>
							<option value="politica">Politica</option>
							<option value="literaturaInfantil">Literatura Infantil</option>';
								break;
							case 'politica':
								echo '<option value="novela">Novela</option>
							<option value="biografia">Biografia</option>
							<option value="fabula">Fabula</option>
							<option value="politica" selected>Politica</option>
							<option value="literaturaInfantil">Literatura Infantil</option>';
								break;
							case 'literaturaInfantil':
								echo '<option value="novela">Novela</option>
							<option value="biografia">Biografia</option>
							<option value="fabula">Fabula</option>
							<option value="politica">Politica</option>
							<option value="literaturaInfantil" selected>Literatura Infantil</option>';
								break;
								default: echo '
								<option value="novela">Novela</option>
							<option value="biografia">Biografia</option>
							<option value="fabula">Fabula</option>
							<option value="politica">Politica</option>
							<option value="literaturaInfantil">Literatura Infantil</option>
								';
						}
						 ?>

						</select><br>
						</div>
						<div class="col-lg-12">
							<label>Subgenero</label>
							<input type="text" class="float-right" name="subgenero" value="<?php echo $registro['subgenero'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Publicacion</label>
							<input type="date" class="float-right" name="publicacion" value="<?php echo $registro['publicacion'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Stock</label>
							<input type="number" class="float-right" name="stock" value="<?php echo $registro['stock'];?>"><br>
						</div>	
						<div class="col-lg-12">
							<label>Precio</label>
							<input type="number" class="float-right" name="precio" value="<?php echo $registro['precio'];?>"><br>
						</div>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">	
									<label>Descripcion</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<textarea type="text" name="descripcion" class="inp-desc"  style="WIDTH: 100%;" rows="10" cols="50"
									 value=""><?php echo $registro['descripcion'];?></textarea>
								</div>
							</div>
						</div><br>
						<button type="submit" name="editar" class="btn btn-info float-right">Editar &#10003;</button><br>
					</form>
				</div>
			</div>
		</div>	
	</div>
</div>						