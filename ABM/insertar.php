<form action="index.php" method="post" enctype="multipart/form-data">
	<img class="silueta" src="libros/estandar.jpg" width="300px" height="300px">
	<input class="iFoto" type="file" name="foto">
	<br>
	<label>Nombre</label>
	<input type="text" name="nombre">
	<br>
	<div class="insertarEscritor">
	<label>Escritor</label>
	<input type="text" name="escritor">
	<br>
	<label> Genero </label>
		<select name="genero">
		  <option value="novela">Novela</option>
		  <option value="biografia">Biografia</option>
		  <option value="fabula">Fabula</option>
		  <option value="politica">Politica</option>
	</select>
	</div>
	<br>
	<label>Editorial</label>
	<input type="text" name="editorial" class="inp-insert">
	<br>

	<label>ISBN</label>
	<input type="number" name="isbn" class="inp-insert">
	<br>

	<label>Subgenero</label>
	<input type="text" name="subgenero" class="inp-insert">
	<br>

	<label>Fecha</label>
	<input type="date" name="publicacion" class="inp-insert">
	<br>

	<label>Stock</label>
	<input type="number" name="stock" class="inp-insert">
	<br>

	<label>Descripcion</label>
	<input type="text" name="descripcion" class="inp-insert">
	<br>

	<label>Precio</label>
	<input type="number" name="precio" class="inp-insert">
	<br>

	<input type="submit" name="insertar" value="Insertar" class="btn-insertar">
</form>

<?php 
	include("redimensionarImagen.php");
	if (isset($_REQUEST['insertar'])) {
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
			$nombre_imagen=redimensionarImagen($nbr_foto, 300, 500);
			unlink($nbr_foto);
		}else{
			$nombre_imagen="estandar.jpg";
		}

		$sql= "INSERT INTO libro (foto, nombre, escritor, editorial, isbn, genero, subgenero, publicacion, stock, descripcion, precio) VALUES ('$nombre_imagen', '$nombre', '$escritor', '$editorial', '$isbn', '$genero','$subgenero','$publicacion','$stock', '$descripcion', '$precio')";

		$insertar=mysqli_query($conexion, $sql)? print('<script>alert("Nuevo registro")</script>') : print('<script>alert("ERROR")</script>');
	}
 ?>