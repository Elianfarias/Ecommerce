<?php 
 $id=$_GET['id_borrar'];
 $sql="SELECT * FROM libro where id='".$id."'";
 $consulta=mysqli_query($conexion,$sql);
 $registro=mysqli_fetch_assoc($consulta);
 if($registro['foto'] != "estandar.jpg"){
 unlink("libros/".$registro['foto']);}
		
		$sql="DELETE FROM libro where id='".$id."'";
		mysqli_query($conexion, $sql)? print('<script>alert("Registro eliminado")</script>'): print('<script>alert("Error al eliminar")</script>');
	
?>