<?php 
	if (isset($_GET['genero']) && $_GET['genero'] != 'todos') {
		$genero=$_GET['genero'];
		$sql="SELECT * FROM libro WHERE genero='".$genero."'ORDER BY nombre ASC";
	}
	if (!isset($_GET['genero']) && !isset($_GET['buscar']) || isset($_GET['genero']) && $_GET['genero']=='todos') {
		$sql="SELECT * FROM libro ORDER BY nombre ASC";
	}
	
if (isset($_GET['buscar'])) {
		$buscar=$_GET['buscar'];
		$sql="SELECT * FROM libro WHERE nombre LIKE'%$buscar%' OR genero LIKE '%$buscar%' OR subgenero LIKE '%$buscar%'
			OR editorial LIKE '%$buscar%' OR ISBN LIKE '%$buscar%'
		ORDER BY nombre ASC";
	}	

?>