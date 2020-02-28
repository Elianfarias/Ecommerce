<?php 
	if (isset($_GET['usuario']) && $_GET['usuario'] != 'todos') {
		$usuario=$_GET['usuario'];
		$sql="SELECT * FROM usuarios WHERE validation = '".$usuario."'ORDER BY name ASC";
	}
	if (!isset($_GET['usuario']) && !isset($_GET['buscar']) || isset($_GET['usuario']) && $_GET['usuario']=='todos') {
		$sql="SELECT * FROM usuarios ORDER BY name ASC";
	}
	
if (isset($_GET['buscar'])) {
		$buscar=$_GET['buscar'];
		$sql="SELECT name,username,email,code,fechaRegistro,ultimaConexion,tipoUsuario FROM usuarios WHERE name LIKE'%$buscar%' OR code LIKE '%$buscar%' OR tipoUsuario LIKE '%$buscar%'
		ORDER BY name ASC";
	}	

?>