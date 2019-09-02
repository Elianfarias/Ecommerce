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

<div class="">
<details>
	<summary>
	<?php 

	if (!empty($registro['foto'])){
		echo '<img src="libros/'.$registro['foto'].'" >'; 
	}else{
		echo '<img src="foto.jpg">'; 
	}
			echo $registro['nombre'];
		 ?>
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


	<div class="icons">
		<a href="editar.php?id_editar=<?php echo $registro['id'];?>"><img src="img/editar.png" width="18"></a>
		<a href="index.php?id_borrar=<?php echo $registro['id'];?>" onclick="return confirm('¿Realmente desea borrar el libro?')">
		<img src="img/basura.png" width="15"></a>
	</div>	
</details></div>
<?php 
}
	}else{
		echo "No hay libros";
	}
 ?>

