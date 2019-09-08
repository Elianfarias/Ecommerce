$(function () {
    var data = 'todos';
        $.ajax({
        url:'filtrosCatalogo.php',
        type:'POST',
        data:{data:data},
        success: function(res){
           
            var respuestas = JSON.parse(res);
            respuestas.forEach(element => {
            $('#librosCatalogo').append(`<div class="col-lg-4 col-md-6 col-sm-12 catalogoUnidad contenedorCatalogo">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <div class="col-lg-12 text-center contenedorCatalogo">
            <img src="../../ABM/libros/${element.foto}" width="187.5px" heigth="375px" alt="${element.nombre}" >
                </div>
                <div class="col-lg-12 contenedorCatalogo">
                    <div class="row mx-auto">
                        <p class="font-italic">
                         ${element.nombre}
                        </p>
                    </div>
                    <p class="font-weight-light font-italic">${element.escritor}</p>
                    <p class="mb-5"><button type="button" class="btn btn-link float-right"><a href="articulo.php?id=${element.id}">Ver Más</a></button></p>
                    
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
        url:'filtrosCatalogo.php',
        type:'POST',
        data:{data:data},
        success: function(res){
           
            var respuestas = JSON.parse(res);
            console.log(respuestas[0].foto)
            respuestas.forEach(element => {
            $('#librosCatalogo').append(`<div class="col-lg-4 col-md-6 col-sm-12 catalogoUnidad contenedorCatalogo">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <div class="col-lg-12 text-center contenedorCatalogo">
            <img src="../../ABM/libros/'${element.foto}'" width="187.5px" heigth="375px" alt="${element.nombre}" >
                </div>
                <div class="col-lg-12 col-md-6 col-sm-4 contenedorCatalogo">
                    <div class="row mx-auto">
                        <p class="font-italic">
                         ${element.nombre}
                        </p>
                    </div>
                    <p class="font-weight-light font-italic">${element.escritor}</p>
                    <p class="mb-5"><button type="button" class="btn btn-link float-right"><a href="articulo.php?id=${element.id}">Ver Más</a></button></p>
                    
                </div>     
            </div>
        </div>`);
    });
        }
        
    })
});