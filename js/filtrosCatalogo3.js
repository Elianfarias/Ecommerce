$(function () {
    var data = 'todos';
        $.ajax({
        url:'includes/filtrosCatalogo.php',
        type:'POST',
        data:{data:data},
        success: function(res){
           
            var respuestas = JSON.parse(res);
            respuestas.forEach(element => {
            $('#librosCatalogo').append(`<div class="col-lg-4 col-md-6 col-sm-12 catalogoUnidad contenedorCatalogo">
            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="height:500px">
            <div class="col-lg-12 text-center contenedorCatalogo">
            <img src="ABM/libros/${element.foto}" width="187.5px" heigth="375px" alt="${element.nombre}" >
                </div>
                <div class="col-lg-12 col-md-6 col-sm-12 contenedorCatalogo">
                    <div class="row mx-auto" style="height:74px">
                        <p style="font-size:25px">
                         ${element.nombre}
                        </p>
                    </div>
                    <p class="font-weight-light mb-0">${element.escritor}</p>
                    <p class="font-weight-light mb-0" style="color:rgb(219, 144, 0.5);">$${element.precio}</p>
                    <p><button type="button" class="btn btn-link float-right"><a href="articulo.php?id=${element.id}">Ver Más</a></button></p>
                    
                </div>     
            </div>
        </div>`);
    });
        }
        
    })
})

$('.genero').click(function () {

    var data = $(this).attr("data-genero");
    $('.catalogoUnidad').remove();
        $.ajax({
        url:'includes/filtrosCatalogo.php',
        type:'POST',
        data:{data:data},
        success: function(res){
           
            var respuestas = JSON.parse(res);
            console.log(respuestas[0].foto)
            respuestas.forEach(element => {
            $('#librosCatalogo').append(`<div class="col-lg-4 col-md-6 col-sm-12 catalogoUnidad contenedorCatalogo">
            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="height:500px">
            <div class="col-lg-12 text-center contenedorCatalogo">
            <img src="ABM/libros/${element.foto}" width="187.5px" heigth="375px" alt="${element.nombre}" >
                </div>
                <div class="col-lg-12 col-md-6 col-sm-12 contenedorCatalogo">
                    <div class="row mx-auto" style="height:74px">
                        <p style="font-size:25px">
                         ${element.nombre}
                        </p>
                    </div>
                    <p class="font-weight-light mb-0">${element.escritor}</p>
                    <p class="font-weight-light mb-0" style="color:rgb(219, 144, 0.5);">$${element.precio}</p>
                    <p><button type="button" class="btn btn-link float-right"><a href="articulo.php?id=${element.id}">Ver Más</a></button></p>
                    
                </div>     
            </div>
        </div>`);
    });
        }
        
    })
});