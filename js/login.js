$("#formLogin").submit(function (event) {
    event.preventDefault();
    $.ajax({
        url: "includes/login.php",
        type: "POST",
        datatype:"json",
        data: $(this).serialize(),
        success: function (res) {
            var respuesta = JSON.parse(res);
            if(!respuesta.error){
                if(respuesta.tipo == 'admin'){
                    location.href = 'admin/';
                }
                else if(respuesta.tipo == 'usuario'){
                    console.log('asd')
                    location.href = 'usuario/';
                }
            }
            else{
                $('.error').slideDown('slow');
                setTimeout(function () {
                $('.error').slideUp('slow')
                }, 3000);
            }
        },
        error: function (err) {
      
            console.log("Error: ", err);
        }
    })
})