$(".filter").click(function () {
    var valor = $(this).attr("data-nombre");
    if (valor === "todos"){
      $(".recomendados-libro").show(1000);
    }
    if (valor === "recomendados"){
      $("#descuento-libro").hide(1000);
      $("#recomendado-libro").show(1000);
    }
    if (valor === "descuentos"){
      $("#descuento-libro").show(1000);
      $("#recomendado-libro").hide(1000);
    }
    
   })