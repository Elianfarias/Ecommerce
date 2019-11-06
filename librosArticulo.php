<?php

	if (isset($_GET['id'])) {
        $id_libro=$_GET['id'];		
        $sql="SELECT * FROM libro WHERE id='$id_libro'";
        $consulta=mysqli_query($conexion, $sql);
        $registro=mysqli_fetch_assoc($consulta);

        $nombre=$registro['nombre'];
		    $foto=$registro['foto'];
	    	$escritor=$registro['escritor'];
	    	$editorial=$registro['editorial'];
	    	$isbn=$registro['isbn'];
	    	$genero=$registro['genero'];
	    	$publicacion=$registro['publicacion'];
	    	$stock=$registro['stock'];
	    	$descripcion=$registro['descripcion'];
	    	$subgenero=$registro['subgenero'];
	    	$precio=$registro['precio'];

        ?>
        <head><title><?php echo $nombre ?></title></head>
        <div class="row" style="margin-top:10%;margin-bottom:10%">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
              <div class="card-body text-center">
                <img style="max-width:300px;max-height:500px" src="ABM/libros/<?php echo $foto ?>" class="card-img-top"/><!--imagen Hardcodeada-->
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="row">
              <div class="col-lg-12">
                <h1 class="font-weight-light"><strong><?php echo $nombre ?></strong></h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h6 class="font-weight-light"><strong>Autor: </strong><?php echo $escritor ?></h6>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h6 class="font-weight-light"><strong>Editorial: </strong><?php echo $editorial ?></h6>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h6 class="font-weight-light"><strong>Genero: </strong><?php echo $genero ?></h6>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h6 class="font-weight-light"><strong>Subgenero: </strong> <?php echo $subgenero ?> </h6>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h6 class="font-weight-light"><strong>ISBN: </strong><?php echo $isbn ?></h6>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h6 class="font-weight-light"><strong>Fecha de Publicacion: </strong> <?php echo $publicacion ?></h6>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <h6 class="font-weight-light"><strong>Stock: </strong><?php echo $stock ?></h6>
              </div>
            </div>
            <div class="row my-4">
              <div class="col-sm-6 offset-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <h3 class="card-title">$<?php echo $precio ?></h3>
                      </div>
                      <div class="col-sm-6">
                        <a href="carrito2.php?id=<?php echo $id_libro;?>" class="btn btn-primary float-right">Comprar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h6 class="font-weight-light"><strong>Descripción: </strong><?php echo $descripcion ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
    else{
		echo "No hay libros";
	}
 ?>