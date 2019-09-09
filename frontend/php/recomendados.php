<?php
include("conexion.php");
$sql='SELECT *
FROM libro
WHERE escritor="Joanne K. Rowling"
LIMIT 3';
$consulta= mysqli_query($conexion,$sql);
$json = array();
while ($registro=mysqli_fetch_assoc($consulta)){
    $json [] = array(
        'nombre' => $registro['nombre'],
        'foto' => $registro['foto'],
        'descripcion' => $registro['descripcion'],
        'precio' => $registro['precio'],
        'escritor' => $registro['escritor']
        
    );
}
$jsonString = json_encode($json);
echo $jsonString;
?>
