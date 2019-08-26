
$(function () {
    $("#busqueda").keyup(function () {
        
        var valor = $("#busqueda").val().toLowerCase();
        let search = valor.replace(/\b\w/g, function(l){ return l.toUpperCase() })
        $.ajax({
            url:"../php/buscador.php",
            type:"POST",
            data:{search},
            success: function(respuesta) {
                if(search != ''){
                var tareas = JSON.parse(respuesta);
                tareas.forEach(tarea => {
                $("#listaBusqueda").append( `<a href="#" class="list-group-item list-group-item-action" >${tarea.nombre}</a>`);
                $("#listaBusqueda").show(200);
                });
                console.log($("#busqueda").keyup().lenght)
                
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
    })
})