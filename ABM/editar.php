<?php 
include("redimensionarImagen.php");
	if (isset($_POST['editar'])) {
		$id_editar=$_REQUEST['id_editar'];
		$foto_previa=$_FILES['foto'];
		$nombre=$_REQUEST['nombre'];
		$escritor=$_REQUEST['escritor'];
		$editorial=$_REQUEST['editorial'];
		$isbn=$_REQUEST['isbn'];
		$genero=$_REQUEST['genero'];
		$publicacion=$_REQUEST['publicacion'];
		$stock=$_REQUEST['stock'];
		$descripcion=$_REQUEST['descripcion'];
		$subgenero=$_REQUEST['subgenero'];
		$precio=$_REQUEST['precio'];

		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			$nbr_foto=$_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'],$nbr_foto);
		/*Llamo a la función redimensionar, envío nombre de la imagen y ancho final*/
			$nombre_imagen=redimensionarImagen($nbr_foto, 500, 500);
			unlink($nbr_foto);
			unlink("libros/".$foto_previa);
			// Cambiar fotos
		}else{
			$nombre_imagen=$foto_previa;
		}

		$sql="UPDATE libro SET foto='$nombre_imagen', nombre='$nombre', escritor='$escritor', editorial= '$editorial',isbn = '$isbn', genero = '$genero', subgenero = '$subgenero', publicacion = '$publicacion', stock = '$stock', descripcion = '$descripcion', precio = '$precio'
		WHERE id='$id_editar'";

		$editar=mysqli_query($conexion, $sql)? header("location:index.php?id_modificado=$id_editar") : print('<script>alert("Error al modificar el registro. ")</script>');
	}


$id_editar=$_REQUEST['id_editar'];
$sql="SELECT * FROM libro WHERE id='$id_editar'";
$consulta=mysqli_query($conexion, $sql);
$registro=mysqli_fetch_assoc($consulta);


?>

<p class="titulo">Editar libro</p>
<form action="index.php" method="post" enctype="multipart/form-data">
  <!--ENCTYPE SUBIR IMAGEN -->
  <?php 
  if (!empty($registro['foto'])) {
	   echo '<img class="silueta" src="libros/'.$registro['foto'].'" width="300px" height="300px">';
   }else{
	   //Esto es lo que hay que arreglar por ahora
   	echo '<img class="silueta" src="libros/estandar.jpg" width="300px" height="300px">';
   	} ?>	
<input class="iFoto" type="file" name="foto">
<input type="hidden" name="foto_previa" value="<?php echo $registro['foto'];?>">
<input type="hidden" name="id_editar" value="<?php echo $registro['id'];?>">
	<label>Nombre</label>
	<input type="text" name="nombre" value="<?php echo $registro['nombre'];?>">
	<div class="tel">
	<label>Escritor</label>
	<input type="text" name="escritor" value="<?php echo $registro['escritor'];?>">
	<label>Editorial</label>
	<input type="text" name="editorial" value="<?php echo $registro['editorial'];?>">
	<label>ISBN</label>
	<input type="number" name="isbn" value="<?php echo $registro['isbn'];?>">
	<label>Genero</label>
	<select name="genero">
	<?php 
	switch ($registro['genero']) {
		case 'novela':
			echo '<option value="novela" selected>Novela</option>
		<option value="biografia">Biografia</option>
		<option value="fabula">Fabula</option>
		<option value="politica">Politica</option>';
			break;
		case 'biografia':
			echo '<option value="novela">Novela</option>
		<option value="biografia" selected>Biografia</option>
		<option value="fabula">Fabula</option>
		<option value="politica">Politica</option>';
			break;
		case 'fabula':
			echo '<option value="novela">Novela</option>
		<option value="biografia">Biografia</option>
		<option value="fabula" selected>Fabula</option>
		<option value="politica">Politica</option>';
			break;
		case 'politica':
			echo '<option value="novela">Novela</option>
		<option value="biografia">Biografia</option>
		<option value="fabula">Fabula</option>
		<option value="politica" selected>Politica</option>';
			break;
			default: echo '
			<option value="novela">Novela</option>
		<option value="biografia">Biografia</option>
		<option value="fabula">Fabula</option>
		<option value="politica">Politica</option>
			';
	}
	 ?>
		
	</select>
	</div> <?php//publicacion, stock, descripcion, precio?>
	<label>Subgenero</label>
	<input type="text" name="subgenero" value="<?php echo $registro['subgenero'];?>">
	<label>Publicacion</label>
	<input type="text" name="publicacion" value="<?php echo $registro['publicacion'];?>">
	<label>Stock</label>
	<input type="number" name="stock" value="<?php echo $registro['stock'];?>">
	<label>Descripcion</label>
	<input type="text" name="descripcion" value="<?php echo $registro['descripcion'];?>">
	<label>Precio</label>
	<input type="number" name="precio" value="<?php echo $registro['precio'];?>">

	<input type="submit" name="editar" value="Editar" class="insertar">
	<input type="submit" name="cancelar" value="Cancelar" class="insertar">
</form>
