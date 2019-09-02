<?php 
	if (isset($_GET['genero']) && $_GET['genero'] != 'todos') {
		$genero=$_GET['genero'];
		$sql="SELECT * FROM libro WHERE genero='".$genero."'ORDER BY nombre ASC";
	}
	if (!isset($_GET['genero']) && !isset($_GET['buscar']) || isset($_GET['genero']) && $_GET['genero']=='todos') {
		$sql="SELECT * FROM libro ORDER BY nombre ASC";
	}
?>