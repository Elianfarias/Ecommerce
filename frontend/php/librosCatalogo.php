<?php
    include("filtrosCatalogo.php");
	
	$consulta=mysqli_query($conexion,$sql);
	if(mysqli_num_rows($consulta)>0) {
        while($registro=mysqli_fetch_assoc($consulta)) 
        {		
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <div class="col-lg-12 text-center ">
            	    <?php 
            	    if (!empty($registro['foto'])){
            	    	echo '<img src="../../ABM/libros/'.$registro['foto'].'" width="187.5px" heigth="375px" >'; 
            	    }else{
            	    	echo '<img src="../../ABM/foto.jpg">'; 
                    }?>
                    </div>
                    <div class="col-lg-12">
                        <div class="row mx-auto">
                            <p class="font-italic">
                                <?php
            	        		    echo '<br>' .$registro['nombre'];
                                ?>
                            </p>
                        </div>
            	        <p class="font-weight-light font-italic"><?php 
            	        		echo $registro['escritor'];
            	        	 ?></p>
            	        <p class=""><?php 
            	        		echo "$".$registro['precio'];
                             ?><button type="button" class="btn btn-link float-right"><a href="articulo.php?id=<?php echo $registro['id'];?>">Ver Más</a></button></p>
                        
                    </div>     
                </div>
            </div>
            <?php 
        }
	}else{
		echo "No hay libros";
	}
 ?>

