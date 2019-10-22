<?php
function listarProductos()
{
    include("conexion.php");
    $sql = "SELECT * FROM libro ORDER BY descripcion";
    $consulta = $conexion->query($sql) or die($consulta->error());
    if ($consulta->num_rows > 0) {
        while ($registro = $consulta->fetch_assoc()) {
            echo '
            <hr>
            <div class="row">
            <div class="col-lg-4"><img src="ABM/libros/' . $registro['foto'] . '" width="187.5px" heigth="375px" alt="' . $registro['nombre'] . '" ></div>
            <div class="row">
             <div class="col-lg-12"> ' . $registro['nombre'] . '</div>
             <div class="col-lg-12">$' . $registro['precio'] . '</div>
             <div class="col-lg-12">Autor: ' . $registro['escritor'] . '</div>             
            </div>
				 <div class="col-lg-4 ml-auto text-right"><a href="carrito3.php?id=' . $registro['id'] . '">agregar a carrito</a></div> </div>';
        }
    }
    $consulta->free();
    $conexion->close();
}
function agregarPrimerProducto($id)
{
    include("conexion.php");
    $sql = "SELECT * FROM libro WHERE id=" . $id . "";
    $resultado = $conexion->query($sql);
    while ($registro = $resultado->fetch_array()) {

        $id = $registro['id'];
        $Descripcion = $registro['descripcion'];
        $Precio = $registro['precio'];
        $Cantidad = 1; //por ser la primera vez que cargo el producto
    }
    $prods_compra[] = array(
        'id' => $id, 'descripcion' => $Descripcion,
        'precio' => $Precio, 'cantidad' => $Cantidad
    );
    //CREAMOS LA VARIABLE DE SESSION $_SESSION['carrito']
    $_SESSION['carrito'] = $prods_compra;
    $resultado->free();
    $conexion->close();
}
function mostrarProductosCarrito()
{
    //a veces llamamos a la funcion y el carrito ya no existe por ejemplo porque
    // eliminamos el ultimo producto por lo cual eliminamos la variable de sesion carrito
    if (!isset($_SESSION['carrito'])) {
        echo "carrito vacio <br>";
    } else {
        $total = 0;
        $prods_compra = $_SESSION['carrito'];
        print_r($prods_compra);
        echo '<br>';
        foreach ($prods_compra as  $indice => $producto) {
            echo 'id - ' . $producto['id'] . '<br>';
            echo 'descripcion - ' . $producto['descripcion'] . '<br>';
            echo 'precio - ' . $producto['precio'] . '<br>';
            echo 'cantidad - ' . $producto['cantidad'] . '<br>';

            if ($prods_compra[$indice]['cantidad'] > 1) {
                echo '<a href="carrito3.php?id_resta=' . $prods_compra[$indice]['id'] . '">restarCantidad |</a> ';
                echo '<a href="carrito3.php?id_suma=' . $prods_compra[$indice]['id'] . '">sumarCantidad </a><br> ';
            } else {
                echo '<a href="carrito3.php?id_suma=' . $prods_compra[$indice]['id'] . '">
	sumarCantidad </a><br> ';
            }
            echo 'Subtotal: $' . $prods_compra[$indice]['cantidad'] * $prods_compra[$indice]['precio'];
            echo '<br>';
            echo '<a href="carrito3.php?id_borra=' . $prods_compra[$indice]['id'] . '">
			Eliminar producto del carrito </a> <br><br>';
            $total = $total + ($prods_compra[$indice]['cantidad'] * $prods_compra[$indice]['precio']);
        }
        echo 'TOTAL COMPRA $' . $total . '<br><br>';
    }
}
function buscarSiProductoExite($id)
{
    $prods_compra = $_SESSION['carrito'];
    $existe = 0;
    foreach ($prods_compra as $indice => $producto) {
        if ($producto['id'] == $id) {
            $existe = 1;
            $prods_compra[$indice]['cantidad']++;
        }
    }
    $_SESSION['carrito'] = $prods_compra;
    return $existe;
}
function agregarNuevoProducto($id)
{
    $prods_compra = $_SESSION['carrito'];
    include("conexion.php");
    $sql = "SELECT * FROM libro WHERE id=" . $id . "";
    $resultado = $conexion->query($sql);
    while ($registro = $resultado->fetch_array()) {
        $id = $registro['id'];
        $Descripcion = $registro['descripcion'];
        $Precio = $registro['precio'];
        $Cantidad = 1; //por ser la primera vez que cargo el producto
    }
    $nuevo_prod = array(
        'id' => $id, 'descripcion' => $Descripcion, 'precio' => $Precio,
        'cantidad' => $Cantidad
    );
    array_push($prods_compra, $nuevo_prod);
    $_SESSION['carrito'] = $prods_compra;
    $resultado->free();
    $conexion->close();
}
function sumarCantidad($id)
{
    $prods_compra = $_SESSION['carrito'];
    foreach ($prods_compra as $indice => $producto) {
        if ($producto['id'] == $id) {
            $prods_compra[$indice]['cantidad']++;
        }
    }
    $_SESSION['carrito'] = $prods_compra;
}
function restarCantidad($id)
{
    $prods_compra = $_SESSION['carrito'];
    foreach ($prods_compra as $indice => $producto) {
        if ($producto['id'] == $id) {
            $prods_compra[$indice]['cantidad']--;
        }
    }
    $_SESSION['carrito'] = $prods_compra;
}

function eliminarProdCarrito($id)
{
    $prods_compra = $_SESSION['carrito'];
    foreach ($prods_compra as $indice => $producto) {
        if ($producto['id'] == $id) {
            unset($prods_compra[$indice]);
        }
    }
    // hay que fijarse si el carrito esta vacio 
    //eliminar la variable de sesion carrito
    if (count($prods_compra) > 0) {
        $_SESSION['carrito'] = $prods_compra;
    } else {
        unset($_SESSION['carrito']);
    }
}

function confirmarCompra()
{
    $prods_compra = $_SESSION['carrito'];
    $total = 0;
    foreach ($prods_compra as  $indice => $producto) {
        echo 'id - ' . $producto['id'] . '<br>';
        echo 'descripcion - ' . $producto['descripcion'] . '<br>';
        echo 'precio - ' . $producto['precio'] . '<br>';
        echo 'cantidad - ' . $producto['cantidad'] . '<br>';
        echo 'Subtotal: $' . $prods_compra[$indice]['cantidad'] * $prods_compra[$indice]['precio'] . '<br><br>';

        $total = $total + ($prods_compra[$indice]['cantidad'] * $prods_compra[$indice]['precio']);
    }
    echo 'TOTAL COMPRA $' . $total . '<br><br>';
}

function comprar()
{

    include("conexion.php");
    $fecha = date("Y-m-d");
    $usuario = $_SESSION['id_usuario'];
    echo $fecha . '<br>';
    $sql = "INSERT INTO ventas (fecha, id_usuario) VALUES ('$fecha','$usuario')";
    $insert = $conexion->query($sql);


    $sqlc = "SELECT id_venta FROM ventas ORDER BY id_venta desc LIMIT 1,1";
    $consulta = $conexion->query($sqlc);
    $registro = $consulta->fetch_array();
    echo $registro[0];
    $id_venta = $registro[0];

    $prods_compra = $_SESSION['carrito'];
    $total = 0;
    foreach ($prods_compra as $indice => $producto) {
        $id = $producto['id'];
        $precio = $producto['precio'];
        $cantidad = $producto['cantidad'];

        $sqli = "INSERT INTO prodxventas (id_venta, id, precio_u, cant) VALUES ('$registro[0]','$id','$precio','$cantidad')";
        $insertar = $conexion->query($sqli) ? print("ok") : print("Ups, :(");

        $total = $total + ($prods_compra[$indice]['precio'] * $prods_compra[$indice]['cantidad']);
    }

    $sql = "UPDATE ventas SET total='$total'";
    $actualizar = $conexion->query($sql) ? print("ok") : print("Ups, :(");
}
