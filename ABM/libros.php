<h2 class="titulo">Filtrar por:
<?php 
	if (isset($_GET['genero'])) {
		echo $_GET['genero'];
	}
	elseif(isset($_GET['buscar'])){
		echo $_GET['buscar'];
	}
	else{
	echo "Todos";
}
 ?>
</h2>
<?php 
	$consulta=mysqli_query($conexion,$sql);
	if(mysqli_num_rows($consulta)>0) {
		while($registro=mysqli_fetch_assoc($consulta)) {		
		
 ?>
	<details>
		<summary>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8">
				<?php 

				if (!empty($registro['foto'])){
					echo '<img src="libros/'.$registro['foto'].'" >'; 
				}else{
					echo '<img src="foto.jpg">'; 
				}
					echo $registro['nombre'];
				 ?>
			</div>
		
			 <div class="col-lg-4 col-md-4 col-sm-4 d-inline my-auto text-right">
				<a href="editar.php?id_editar=<?php echo $registro['id'];?>">
				<button class="btn btn-warning text-white ">Modificar <i class="fas fa-pencil-alt"></i></button></a>
				<a href="indexLibro.php?id_borrar=<?php echo $registro['id'];?>" onclick="return confirm('¿Realmente desea borrar el libro?')">
				<button class="btn btn-danger text-white">Eliminar <i class="far fa-trash-alt"></i></button></a>
			</div>
		</div>
		</summary>
		<hr>
		<p class="items"><?php 
				echo "Escritor: ".$registro['escritor'];
			 ?></p>
		<p class="items"><?php 
				echo "Editorial: ".$registro['editorial'];
			 ?></p>
		<p class="items"><?php 
				echo "ISBN: ".$registro['isbn'];
			 ?></p>
		<p class="items"><?php 
				echo "Genero: ".$registro['genero'];
			 ?></p>
		<p class="items"><?php 
				echo "Subgenero: ".$registro['subgenero'];
			 ?></p>	 
		<p class="items"><?php 
				echo "F/Public: ".$registro['publicacion'];
			 ?></p>
	    <p class="items"><?php 
				echo "Stock: ".$registro['stock'];
			 ?></p>
		<p class="items"><?php 
				echo "Descrip: ".$registro['descripcion'];
			 ?></p>
		<p class="items"><?php 
				echo "Precio: ".$registro['precio'];
			 ?></p>
	</details>

<?php 
}
	}else{
		echo "No hay libros";
	}
 ?>

