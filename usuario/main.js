$(".filter").click(function() {
    var valor = $(this).attr("data-nombre");
    if (valor === "todos") {
        $(".recomendados-libro").show(1000);
    }
    if (valor === "recomendados") {
        $("#descuento-libro").hide(1000);
        $("#recomendado-libro").show(1000);
    }
    if (valor === "descuentos") {
        $("#descuento-libro").show(1000);
        $("#recomendado-libro").hide(1000);
    }
});
$(function() {
    $.ajax({
        url: "../includes/recomendados.php",
        type: "GET",
        success: function(respuesta) {
            var tareas = JSON.parse(respuesta);
            tareas.forEach(tarea => {
                $("#recomendado-libro").append(`<div class="col-lg-4 col-md-6 col-sm-12 catalogoUnidad contenedorCatalogo">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <div class="col-lg-12 contenedorCatalogo">
        <img src="../ABM/libros/${tarea.foto}" width="187.5px" heigth="375px" alt="${tarea.nombre}" >
            </div>
            <div class="col-lg-12 col-md-6 col-sm-12 text-left contenedorCatalogo">
                <div class="row mx-auto mt-3" style="height:74px">
                    <p class="text-dark" style="font-size:25px">
                     ${tarea.nombre}
                    </p>
                </div>
                <p class="font-weight-light mb-0 text-dark">${tarea.escritor}</p>
                <p class="font-weight-light mb-0">$${tarea.precio}</p>
                <p class="mb-5"><button type="button" class="btn btn-link float-right"><a href="../articulo.php?id=${tarea.id}">Ver Más</a></button></p>
                
            </div>     
        </div>
    </div>`);
            });
        },
        fail: function(e) {
            console.log("Error" + e);
        }
    });
    $.ajax({
        url: "../includes/descuentos.php",
        type: "GET",
        success: function(respuesta) {
            var tareas = JSON.parse(respuesta);

            tareas.forEach(tarea => {
                $("#descuento-libro").append(`<div class="col-lg-4 col-md-6 col-sm-12 catalogoUnidad contenedorCatalogo">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <div class="col-lg-12 contenedorCatalogo">
            <img src="../ABM/libros/${tarea.foto}" width="187.5px" heigth="375px" alt="${tarea.nombre}" >
                </div>
                <div class="col-lg-12 col-md-6 col-sm-12 text-left contenedorCatalogo">
                    <div class="row mx-auto mt-3" style="height:74px">
                        <p class="text-dark" style="font-size:25px">
                         ${tarea.nombre}
                        </p>
                    </div>
                    <p class="font-weight-light mb-0 text-dark">${tarea.escritor}</p>
                    <p class="font-weight-light mb-0">$${tarea.precio}</p>
                    <p class="mb-5"><button type="button" class="btn btn-link float-right"><a href="../articulo.php?id=${tarea.id}">Ver Más</a></button></p>
                    
                </div>     
            </div>
        </div>`);
            });
        },
        fail: function(e) {
            console.log("Error" + e);
        }
    });
})