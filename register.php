
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/registerr.css">
  <link rel="stylesheet" href="css/login.css">

</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <div class="fadeIn first">
        <a href="index.php"><img src="img/moonlight.png" id="icon" alt="User Icon" /></a>
      </div>
      <form action="register.php" method="POST">
        <input type="text" class="fadeIn second" name="username" pattern="[A-Za-z0-9_-]{1,30}" placeholder="Nombre de usuario*">
        <input type="text" class="fadeIn second" name="name"  placeholder="Nombre y Apellido*">
        <input type="password" class="fadeIn third" name="pass"  placeholder="Contraseña*">
        <input type="password" class="fadeIn third" name="confirmPass" placeholder="Confirmar contraseña*">
        <input type="email" class="fadeIn third" name="email" placeholder="Email*"><br>
        <label class="text-secondary">* obligatorio</label><br>
        <input type="submit" name="insertar" class="fadeIn fourth" value="Registrarse">
      </form>
      <div id="formFooter">
        <a class="underlineHover" href="index.php">Volver</a>
      </div>
    </div>
  </div>
</body>

</html>
<?php
require 'includes/conexion.php';
if (isset($_REQUEST['insertar'])) {
  if (!empty($_POST['pass']) && !empty($_POST['confirmPass']) && !empty($_POST['email']) && !empty($_POST['name'])) {
  $pass = $_REQUEST['pass'];
  $confirmPass = $_REQUEST['confirmPass'];
  if ($pass == $confirmPass) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $code = $pass;
    $fecha_actual = date("d/m/Y");
    $sql = "INSERT INTO usuarios (name, username, pass, email,code,validation, fechaRegistro, ultimaConexion, tipoUsuario) VALUES ('$name', '$username', '$pass', '$email', '$code', 'No verificado', '$fecha_actual', '$fecha_actual','usuario')";
    //  $para = $email;
    //   $tema = 'Confirmación de email';
    //   $mensaje = 'Se ha registrado a'."<a href='http://localhost/Ecommerce/Moonlight/' style='text-decoration:none;color:red;'> Mercado Moonlight </a> con el usuario ".$name."\r\n\n".
    //   'Por favor valide su registro haciendo click en'.
    //   "<a href='https://localhost/Ecommerce/Moonlight/verificar.php?cod=".$code."'style='text-decoration:none;'> este enlace</a>";
    //   $headers = "MIME-Version: 1.0\r\n";
    //   $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    //   $headers .= 'From: moonlight@gmail.com' . "\r\n" .
    //          'Reply-to: '.$email. "\r\n";
    //   mail($para, $tema, $mensaje, $headers);
    $insertar = mysqli_query($conexion, $sql) ? print('<script>alert("Registro Exitoso")</script>') : print('<script>alert("ERROR")</script>');
    header("location:index.php");
  } else {
    print('<script>alert("Error al registrase.")</script>');
    header ('location:index.php?mesage=Error en el registro');   
  }
}
else {
    print('<script>alert("Ingrese datos.")</script>');
  }
}
?>