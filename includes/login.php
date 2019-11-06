<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  $conexion = new mysqli('localhost', 'root', '', 'moon');
  if ($conexion->connect_errno) :
    echo "Error al conectarse a la base de datos." . $conexion->connect_errno;
  endif;

  session_start();
  $conexion->set_charset('utf-8');

  $username = $conexion->real_escape_string($_POST['username']);

  $pass = $conexion->real_escape_string($_POST['pass']);

  if ($nueva_consulta = $conexion->prepare($sql = "SELECT * FROM usuarios WHERE username = ? AND pass = ? ")) {

    $nueva_consulta->bind_param('ss', $username, $pass);

    $nueva_consulta->execute();

    $resultado =  $nueva_consulta->get_result();

    if ($resultado->num_rows == 1) {
      $ultima = date("d/m/Y");
      $update = "UPDATE usuarios SET ultimaConexion='".$ultima."' WHERE username='".$username."'";
      $update_sq = mysqli_query($conexion,$update);  
      $datos = $resultado->fetch_assoc();
      $_SESSION['usuario'] = $datos;
      echo json_encode(array("error" => false, "tipo" => $datos['tipoUsuario']));
    } else {
      echo json_encode(array("error" => true));
    }
    
    $nueva_consulta->close();
  }
}

?>
