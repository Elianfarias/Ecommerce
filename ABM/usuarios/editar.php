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
include("../conexion.php");

$id_editar=$_REQUEST['id_editar'];
$sql="SELECT * FROM usuarios WHERE id='$id_editar'";
$consulta=mysqli_query($conexion, $sql);
$registro=mysqli_fetch_assoc($consulta);

	if (isset($_POST['editar'])) {
		$id_editar=$_REQUEST['id_editar'];
		$nombre=$_REQUEST['name'];
		$username=$_REQUEST['username'];
		$email=$_REQUEST['email'];
		$code=$_REQUEST['code'];
		$validation=$_REQUEST['validation'];
		$fechaRegistro=$_REQUEST['fechaRegistro'];
		$ultimaConexion=$_REQUEST['ultimaConexion'];
		$tipoUsuario=$_REQUEST['tipoUsuario'];

			$sql="UPDATE usuarios SET name='$nombre', username='$username', email= '$email',code = '$code', validation = '$validation', fechaRegistro = '$fechaRegistro', ultimaConexion = '$ultimaConexion', tipoUsuario = '$tipoUsuario' WHERE id='$id_editar'";


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
					<h1 class="titulo text-center">Editar Usuario: <?php echo $registro['name']?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-8 mx-auto shadow-lg p-3 mb-5 bg-white rounded">
					<form action="editar.php" method="post" enctype="multipart/form-data" >
						<div class="col-lg-12">
							<input type="hidden" class="float-right" name="id_editar" value="<?php echo $registro['id'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Nombre</label>
							<input type="text" class="float-right" name="name" value="<?php echo $registro['name'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Nombre de usuario</label>
							<input type="text" class="float-right" name="username" value="<?php echo $registro['username'];?>"><br>
						</div>	
						<div class="col-lg-12">	
							<label>Editorial</label>
							<input type="text" class="float-right" name="email" value="<?php echo $registro['email'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Codigo</label>
							<input type="number" class="float-right" name="code" value="<?php echo $registro['code'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Validación</label>
							<input type="text" class="float-right" name="validation" value="<?php echo $registro['validation'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Fecha de Registro</label>
							<input type="date" class="float-right" name="fechaRegistro" value="<?php echo $registro['fechaRegistro'];?>"><br>
						</div>
						<div class="col-lg-12">
							<label>Ultima conexion</label>
							<input type="text" class="float-right" name="ultimaConexion" value="<?php echo $registro['ultimaConexion'];?>"><br>
						</div>	
						<div class="col-lg-12">
							<label>Tipo de Usuario</label>
							<input type="text" class="float-right" name="tipoUsuario" value="<?php echo $registro['tipoUsuario'];?>"><br>
						</div>
						<br>
						<button type="submit" name="editar" class="btn btn-info float-right">Editar &#10003;</button><br>
					</form>
				</div>
			</div>
		</div>	
	</div>
</div>						