<h2 class="titulo">Filtrar por:
	<?php
	if (isset($_GET['usuario'])) {
		echo $_GET['usuario'];
	} elseif (isset($_GET['buscar'])) {
		echo $_GET['buscar'];
	} else {
		echo "Todos";
	}
	?>
</h2>
<?php
$consulta = mysqli_query($conexion, $sql);
if (mysqli_num_rows($consulta) > 0) {
	while ($registro = mysqli_fetch_assoc($consulta)) {

		?>
		<details>
			<summary>
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8">
						<?php
								echo $registro['name'];
								?>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 d-inline my-auto text-right">
						<a href="index.php?id_borrar=<?php echo $registro['id']; ?>" onclick="return confirm('¿Realmente desea borrar el libro?')">
							<button class="btn btn-danger text-white">Eliminar <i class="far fa-trash-alt"></i></button></a>
					</div>
				</div>
			</summary>
			<hr>
			<p class="items"><?php
										echo "Nombre: " . $registro['name'];
										?></p>
			<p class="items"><?php
										echo "Nombre de usuario: " . $registro['username'];
										?></p>
			<p class="items"><?php
										echo "Email: " . $registro['email'];
										?></p>
			<p class="items"><?php
										echo "Codigo: " . $registro['code'];
										?></p>
			<p class="items"><?php
										echo  isset($registro['validation']) ? "Validacion: " . $registro['validation'] : 'Validacion:';
										?></p>
			<p class="items"><?php
										echo "Fecha de registro: " . $registro['fechaRegistro'];
										?></p>
			<p class="items"><?php
										echo "Ultima conexion: " . $registro['ultimaConexion'];
										?></p>
			<p class="items"><?php
										echo "Tipo de usuario: " . $registro['tipoUsuario'];
										?></p>
		</details>

<?php
	}
} else {
	echo "No hay Usuarios";
}
?>