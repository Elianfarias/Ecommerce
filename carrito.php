<?php
session_start();

include("includes/logicaCarrito.php");


?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Moonlight</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/catalogo2.css" />
    <link rel="stylesheet" href="css/headerSolo.css" />
    <link rel="stylesheet" href="css/footer3.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_SESSION['usuario'])) {
        include("includes/headerUsuario.html");
    } else {
        session_destroy();
    }

    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
             <span class="h4">   Mi Carrito </span>
            </div>
            <div class="col-lg-6 text-right">
                <a href="carrito3.php" class="h5">ver carrito</a><br><br>
            </div>
        </div>
              
                    <?php
                    listarProductos();
                    ?>

</body>

</html>