<?php 
 $id=$_GET['id_borrar'];
 $sql="SELECT * FROM ventas where id_venta = '".$id."'";
 $consulta=mysqli_query($conexion,$sql);
 $registro=mysqli_fetch_assoc($consulta);
		$sql="DELETE FROM ventas where id_venta ='".$id."'";
		mysqli_query($conexion, $sql)? print('<script>alert("Registro eliminado")</script>'): print('<script>alert("Error al eliminar")</script>');
	
?>