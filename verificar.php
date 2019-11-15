<?php
include("includes/conexion.php");
session_start();
$cod = $_REQUEST['cod'];
$sql = "SELECT * FROM usuarios WHERE code='$cod'";
$consulta = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($consulta);
if ($cod == $row['code']) {
    $update = "UPDATE usuarios SET validation='verificado' WHERE code='" . $cod . "'";

    $_SESSION['nuevo'] = $row;
    $update_sq = mysqli_query($conexion, $update);
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="esilos.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>

        <div class="ventana">

            <h1>Gracias por Confirmar</h1>
            <p>Para seguir navegando haga click en el siguiente enlace</p>
            <a href="index.php">Inicio</a>
        </div>

    </body>

    </html>





<?php
}
?>
