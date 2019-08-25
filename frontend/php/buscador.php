<?php
include("conexion.php");
if(isset($_POST['search'])){
    $search= $_POST['search'];
    $sql = "SELECT * FROM libro
    WHERE nombre LIKE '%".$search."%' OR  escritor LIKE '%".$search."%' OR editorial LIKE '%".$search."%' OR genero LIKE '%".$search."%' OR subgenero LIKE '%".$search."%'
    ORDER BY nombre LIMIT 5";
    $consulta= mysqli_query($conexion,$sql);
    $json = array();
    while ($registro=mysqli_fetch_assoc($consulta)){
        $json [] = array(
            'nombre' => $registro['nombre'],
            'foto' => $registro['foto'],    
        );
    $jsonString = json_encode($json);
    echo $jsonString;    

}

?>
