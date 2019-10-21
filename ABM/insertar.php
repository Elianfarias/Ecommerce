<form action="index.php" method="post" enctype="multipart/form-data">
	<div class="col-lg-12">
		<div class="img-insert">
			<img src="estandar.jpg" width="150px" height="250px">
		</div>
		<br>
		<input type="file" name="foto">
	</div>
	<br>
	<div class="col-lg-12">
		<label>Nombre</label>
		<input type="text" required name="nombre" class="float-right">
	</div>
	<br>
	<div class="col-lg-12">
		<label>Escritor</label>
		<input type="text" required name="escritor" class="float-right">
	</div>
	<br>
		<div class="col-lg-12">
			<label> Genero </label>
			<select required name="genero" class="float-right">
				<option value="novela">Novela</option>
				<option value="biografia">Biografia</option>
				<option value="fabula">Fabula</option>
				<option value="politica">Politica</option>
				<option value="literaturaInfantil">Literatura Infantil</option>
			</select>
		</div>
	<br>
	<div class="col-lg-12">
		<label>Editorial</label>
		<input type="text" required name="editorial" class="float-right">
	</div>
	<br>
	<div class="col-lg-12">
		<label>ISBN</label>
		<input type="number" required name="isbn" class="float-right">
	</div>
	<br>
	<div class="col-lg-12">
		<label>Subgenero</label>
		<input type="text" required name="subgenero" class="float-right">
	</div>
	<br>
	<div class="col-lg-12">
		<label>Fecha</label>
		<input type="date" required name="publicacion" class="float-right">
	</div>
	<br>
	<div class="col-lg-12">
		<label>Stock</label>
		<input type="number" required name="stock" class="float-right">
	</div>
	<br>
	<div class="col-lg-12">
		<label>Precio</label>
		<input type="number" required name="precio" class="float-right">
	</div>
	<br>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">	
				<label>Descripcion</label>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<textarea type="text" required name="descripcion" class="inp-desc"  style="WIDTH: 100%;" rows="10" cols="50"> </textarea>
			</div>
		</div>
	</div>
	<br>
	<button type="submit" required name="insertar" class="btn btn-success float-right">Añadir</button>

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

		$sql= "INSERT INTO libro (foto, nombre, escritor, editorial, isbn, genero, subgenero, publicacion, stock, descripcion, precio)
		 VALUES ('$nombre_imagen', '$nombre', '$escritor', '$editorial', '$isbn', '$genero','$subgenero','$publicacion','$stock', '$descripcion', '$precio')";

		$insertar=mysqli_query($conexion, $sql)? print('<script>alert("Nuevo registro")</script>') : print('<script>alert("ERROR")</script>');
	}
 ?>