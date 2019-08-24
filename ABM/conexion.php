<?php
$conexion=mysqli_connect("localhost","root","") or die(mysqli_connect_errno($conexion));
$db=mysqli_select_db($conexion, "moon") or die(mysqli_errno($conexion));
?>