<?php
include("conexion.php");
$sql2='SELECT *
FROM libro
ORDER BY precio ASC
LIMIT 3';
$consulta2= mysqli_query($conexion,$sql2);
$json2 = array();
while ($registro2=mysqli_fetch_assoc($consulta2)){
    $json2 [] = array(
        'nombre' => $registro2['nombre'],
        'foto' => $registro2['foto'],
        'descripcion' => $registro2['descripcion']
    );
}
$jsonString2 = json_encode($json2);
echo $jsonString2;
?>