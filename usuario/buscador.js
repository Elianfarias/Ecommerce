
$(function () {
    $("#busqueda").keyup(function () {
        
        var valor = $("#busqueda").val().toLowerCase();
        let search = valor.replace(/\b\w/g, function(l){ return l.toUpperCase() })
        $('.busquedaActiva').remove();
        if (search != "") {
            if ($('header').width() <= 1100 ){
                $("#enlaces").css("display","none");
                $('#listaBusqueda').css({"width":"100%"})
            }     
            else{
                $('#listaBusqueda').css({"width":"260px","margin-left":"0"})
            }
        $.ajax({
            url:"../includes/buscador.php",
            type:"POST",
            data:{search},
            success: function(respuesta) {
                
                if(search != ''){
                var tareas = JSON.parse(respuesta);
                tareas.forEach(tarea => {
                $("#listaBusqueda").append( `<a href="articulo.php?id=${tarea.id}" class="list-group-item list-group-item-action busquedaActiva" >${tarea.nombre}</a>`);
                $("#listaBusqueda").show(1000);
                });
                
            }
                else{
                    $("#listaBusqueda").hide(1000);
                    $(".list-group-item").remove();
                    $("#enlaces").css("display","block");
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