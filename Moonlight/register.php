
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
<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/login.css">

</head>
  <body>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <a href="index.php"><img src="img/moonlight.png" id="icon" alt="User Icon" /></a>
    </div>

    <!-- Login Form -->
    <form action="#" method="POST">
    
      <input type="text"  class="fadeIn second" name="name" placeholder="Nombre y Apellido*">
      <input type="text" class="fadeIn third" name="username" placeholder="Nombre de usuario*">
      <input type="password"  class="fadeIn third" name="password" placeholder="Contraseña*">
      <input type="email"  class="fadeIn third" name="email" placeholder="Email*"><br>
      <label class="text-secondary">* obligatorio</label><br>
      <label for="" class="h5 text-primary mr-auto">Metodo de pago</label><br>
        <select name="credit" class="mb-3 text-center browser-default custom-select w-75" >
            <option value="0" >Ninguna por ahora</option>
            <option value="1" >Tarjeta de credito</option>
            <option value="2">Tarjeta de debito</option>
        </select><br>
        <input type="submit" name="insertar" class="fadeIn fourth" value="Registrarse">
    </form>

    <!-- Remind Passowrd -->
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
  $name=$_POST['name'];
  $username=$_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $email = $_POST['email'];
  $credit = $_POST['credit'];
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (name,username,password,email,credit,type) VALUES ('$name','$username','$password','$email','$credit','usuario')";
		$insertar=mysqli_query($conexion, $sql)? print('<script>alert("Registro Exitoso")</script>') : print('<script>alert("ERROR")</script>');    
  }
}
?>