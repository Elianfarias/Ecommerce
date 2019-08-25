<?php 
	require_once("conexion.php");
		 if (isset($_GET['id_borrar'])) {
		include("borrar.php");
	}
		if (isset($_GET['id_modificado'])) {
			echo '<script>alert("Registro modificado")</script>';
		}
	
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>MoonLight</title>
	<link rel="stylesheet" type="text/css" href="css3/estilo.css">
	<link rel="stylesheet" type="text/css" href="fonts/style.css">
	<link rel="stylesheet" type="text/css" href="css3/menu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
</head>
<body>
<header>
	<div class="barra_menu">
		<a class="btn_menu"><span>&#9776;</span></a>
		<span href="index.php">MoonLight</span>
	</div>
	<nav>
		<form action="">
			<input type="text" name="buscar" placeholder="Buscar">
			<a href="#" style="color: black"><i class="fas fa-search"></i></a>
		</form>
		<ul>
			<li> <?php //esto tiene que cambiarrrr ?>
				<a href="index.php?genero=todos"><span class="lnr lnr-tag"></span> Todos</a>
			</li>
			<li>
				<a href="index.php?genero=Novela"><span class="lnr lnr-tag"></span> Novela</a>
			</li>
			<li>
				<a href="index.php?genero=Politica"><span class="lnr lnr-tag"></span> Politica</a>
			</li>
			<li>
				<a href="index.php?genero=Biografia"><span class="lnr lnr-tag"></span> Biografia</a>
			</li>
			<li>
				<a href="index.php?genero=otros"><span class="lnr lnr-tag"></span> Otros</a>
			</li>
		</ul>
	</nav>
</header>
<div class="icono_insert">
	<a href="#" class="btn_insert"><span class="lnr lnr-plus-circle">asd
		</span>
	</a>
</div>
<div class="icono_list">
	<a href="#" class="btn_list"><span class="lnr lnr-menu-circle">qwe
		</span>
	</a>
</div> 
<section>
<div class="insertar">
<?php if (isset($_REQUEST['id_editar'])) {
		include("editar.php");
}else{ 
	 include("insertar.php");
		} ?>	
	</div>
	 
	<div class="contactos">
		<?php
	
		include("filtros.php");
		include("contactos.php");
		?>
	</div>
</section>
<script src="js/jquery.js"></script>
<script src="js/cambio.js"></script>
</body>
</html>