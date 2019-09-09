
$(function () {
    $("#busqueda").keyup(function () {
        
        var valor = $("#busqueda").val().toLowerCase();
        let search = valor.replace(/\b\w/g, function(l){ return l.toUpperCase() })
        $('.busquedaActiva').remove();
        if (search != "") {
            
        $("#enlaces").css("display","none");
        $.ajax({
            url:"../php/buscador.php",
            type:"POST",
            data:{search},
            success: function(respuesta) {
                if(search != ''){
                var tareas = JSON.parse(respuesta);
                tareas.forEach(tarea => {
                $("#listaBusqueda").append( `<a href="articulo.php?id=${tarea.id}" class="list-group-item list-group-item-action busquedaActiva" >${tarea.nombre}</a>`);
                $("#listaBusqueda").show(200);
                });
                
            }
                else{
                    $("#listaBusqueda").hide(200);
                    $(".list-group-item").remove();
                }
              },

              fail: function(e) {
                console.log("Error" + e);
              }
        })
     }
     else{
        $("#enlaces").css("display","block");
     }
    })
})