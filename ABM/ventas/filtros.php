<?php 
	if (isset($_GET['venta']) && $_GET['venta'] != 'todos') {
		$venta=$_GET['venta'];
		$sql="SELECT * FROM ventas WHERE nombre  = '".$venta."'ORDER BY name ASC";
	}
	if (!isset($_GET['venta']) && !isset($_GET['buscar']) || isset($_GET['venta']) && $_GET['venta']=='todos') {
		$sql = "SELECT  v.id_venta, v.total, v.id_usuario, 
        u.id, u.name, 
        c.id , c.nombre,
        p.id_venta, p.id_libro, p.cantidad 
        FROM ventas v
        JOIN prodxventa p ON v.id_venta = p.id_venta
        JOIN usuarios u ON v.id_usuario = u.id 
        JOIN libro c ON p.id_libro = c.id ORDER BY nombre ASC";
	}
	
if (isset($_GET['buscar'])) {
		$buscar = $_GET['buscar'];
		$sql = "SELECT  v.id_venta, v.total, v.id_usuario, 
        u.id, u.name, 
        c.id , c.nombre,
        p.id_venta, p.id_libro, p.cantidad 
        FROM ventas v
        JOIN prodxventa p ON v.id_venta = p.id_venta
        JOIN usuarios u ON v.id_usuario = u.id 
        JOIN libro c ON p.id_libro = c.id WHERE c.nombre LIKE'%$buscar%' OR c.precio LIKE '%$buscar%' OR c.id LIKE '%$buscar%'
		ORDER BY nombre ASC";
	}	

?>