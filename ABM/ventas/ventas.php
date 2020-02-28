<h2 class="titulo">Filtrar por:
    <?php
    if (isset($_GET['venta'])) {
        echo $_GET['venta'];
    } elseif (isset($_GET['buscar'])) {
        echo $_GET['buscar'];
    } else {
        echo "Todos";
    }
    ?>
</h2>
<?php
$consulta = mysqli_query($conexion, $sql);
if (mysqli_num_rows($consulta) > 0) {
    while ($registro = mysqli_fetch_assoc($consulta)) {
        ?>
        <details>
            <summary>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <?php
                                echo $registro['nombre'];
                                ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 d-inline my-auto text-right">
                        <a href="editar.php?id_editar=<?php echo $registro['id_venta']; ?>">
                            <button class="btn btn-warning text-white ">Modificar <i class="fas fa-pencil-alt"></i></button></a>
                        <a href="index.php?id_borrar=<?php echo $registro['id_venta']; ?>" onclick="return confirm('¿Realmente desea borrar el libro?')">
                            <button class="btn btn-danger text-white">Eliminar <i class="far fa-trash-alt"></i></button></a>
                    </div>
                </div>
            </summary>
            <hr>
            <p class="items"><?php
                                        echo "Codigo de venta: " . $registro['id_venta'];
                                        ?></p>
            <p class="items"><?php
                                        echo "Nombre de libro: " . $registro['nombre'];
                                        ?></p>
            <p class="items"><?php
                                        echo "Fecha de compra: " . $registro['fecha'];
                                        ?></p>
            <p class="items"><?php
                                        echo "Cantidad: " . $registro['cantidad'];
                                        ?></p>
            <p class="items"><?php
                                        echo "Precio: " . $registro['total'];
                                        ?></p>
            <p class="items"><?php
                                        echo "Codigo de libro: " . $registro['id_libro'];
                                        ?></p>
            <p class="items"><?php
                                        echo "Usuario: " . $registro['name'];
                                        ?></p>
        </details>

<?php
    }
} else {
    echo "No hay ventas";
}
?>