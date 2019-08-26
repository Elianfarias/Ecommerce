<?php
include("conexion.php");
if(isset($_POST['search'])){
    $search =$_POST['search'];
    $sql = "SELECT * FROM libro
    WHERE nombre LIKE '".$search."%'
    ORDER BY nombre LIMIT 5";
    $consulta= mysqli_query($conexion,$sql);

    while ($registro=mysqli_fetch_assoc($consulta)){

       
            echo $registro['foto'];
            echo $registro['nombre'];

};
}