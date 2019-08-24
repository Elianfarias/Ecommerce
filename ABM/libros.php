<h1 class="titulo">
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
</h1>
<?php 
	$consulta=mysqli_query($conexion,$sql);
	if(mysqli_num_rows($consulta)>0) {
		
		while($registro=mysqli_fetch_assoc($consulta)) {		
		
 ?>

<div class="cajaContacto">
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






	<p class="penciltrash">
		<a href="index.php?id_editar=<?php echo $registro['id'];?>">E<span class="lnr lnr-pencil">
			
		</span></a>
		<a href="index.php?id_borrar=<?php echo $registro['id'];?>" onclick="return confirm('¿Realmente desea borrar el libro?')">
		B<span class="lnr lnr-trash">
		

		
		</span></a>
	</p>
</details></div>
<?php 
}
	}else{
		echo "No hay libros";
	}
 ?>

