<?php 
include_once("conexion.php");
	if (isset($_POST['data']) && $_POST['data'] != 'todos') {
		$genero=$_POST['data'];
		$sql="SELECT * FROM libro WHERE genero='".$genero."'ORDER BY nombre ASC";
		$consulta=mysqli_query($conexion,$sql);
		$json = array();
		if(mysqli_num_rows($consulta)>0) {
        while($registro=mysqli_fetch_assoc($consulta)) 
        {		
			$json[] = array(
				'id'=> $registro['id'],
				'nombre' => $registro['nombre'],
				'escritor' => $registro['escritor'],
				'foto' => $registro['foto'],
				'precio' => $registro['precio']
			);
		}
		$jsonString = json_encode($json);
		echo $jsonString;
	}
	else{
		echo "No hay libros";
	}
}
if(isset($_POST['data']) && $_POST['data'] == 'todos'){
	$genero=$_POST['data'];
		$sql="SELECT * FROM libro ORDER BY nombre ASC";
		$consulta=mysqli_query($conexion,$sql);
		$json = array();
		if(mysqli_num_rows($consulta)>0) {
        while($registro=mysqli_fetch_assoc($consulta)) 
        {	
			$json[] = array(
				'id' => $registro['id'],
				'nombre' => $registro['nombre'],
				'escritor' => $registro['escritor'],
				'foto' => $registro['foto'],
				'precio' => $registro['precio']
			);
		}
		$jsonString = json_encode($json);
		echo $jsonString;
	}
}

?>