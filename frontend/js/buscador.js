$(function () {
    $("#busqueda").keyup(function () {
        var valor = $("#busqueda").val().toLowerCase();
        var valorFinal = valor.replace(/\b\w/g, function(l){ return l.toUpperCase() })
        $.ajax({
            url:"buscador.php",
            type:"POST",
            data:("search=" + valorFinal),
            success:function (respuesta) {
             if (valorFinal!='') {
                console.log(respuesta);   
            }
        }
        })
    })
})