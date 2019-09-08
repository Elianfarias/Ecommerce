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
    url: "../php/recomendados.php",
    type: "GET",
    success: function(respuesta) {
      var tareas = JSON.parse(respuesta);
      tareas.forEach(tarea => {
        $("#recomendado-libro").append(`<div class="contenedor-recomendados">
        <!-- img producto -->
        <div class="libro">
          <img src="../img/${tarea.foto}" alt="" />
        </div>
        <!-- Info producto -->
        <div class="infolibro">
          <h4>${tarea.nombre}</h4>
          <p>${tarea.descripcion}</p>
        </div>
      </div>`);
      });
    },
    fail: function(e) {
      console.log("Error" + e);
    }
  });
    $.ajax({
      url: "../php/descuentos.php",
      type: "GET",
      success: function(respuesta) {
        var tareas = JSON.parse(respuesta);
     
        tareas.forEach(tarea => {
          $("#descuento-libro").append(`<div class="contenedor-recomendados">
          <!-- img producto -->
          <div class="libro">
            <img src="../img/${tarea.foto}" alt="" />
          </div>
          <!-- Info producto -->
          <div class="infolibro">
            <h4>${tarea.escritor}</h4>
            <p>${tarea.descripcion}</p>
          </div>
        </div>`);
        });
      },
      fail: function(e) {
        console.log("Error" + e);
      }
    });
})
  

