<?php
include("conexion.php");
    $search = $_POST['search'];
    if (!empty($search)) {
    $sql = "SELECT * FROM libro
    WHERE nombre LIKE '$search%'";
$consulta= mysqli_query($conexion,$sql);
$json = array();
while ($registro=mysqli_fetch_assoc($consulta)){
    
    $json [] = array(
        'nombre' => $registro['nombre'],
    );
}
$jsonString = json_encode($json);
echo $jsonString;
}
else{
    echo "No hay libro ";
}

?>