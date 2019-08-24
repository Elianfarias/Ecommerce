$(function(){

	$(".btn_insert").click(function(){
		$(".contactos").css({'display':'none'});
		$(".insertar").css({'display':'block'});
		$(".icono_insert").css({'display':'none'});
		$(".icono_list").css({'display':'block'});
	});

	$(".btn_list").click(function(){
		$(".contactos").css({'display':'block'});
		$(".insertar").css({'display':'none'});
		$(".icono_insert").css({'display':'block'});
		$(".icono_list").css({'display':'none'});
	});

	$(".btn_menu").click(function(){
		$("nav").slideToggle(500);
	});

	/*var c=1;
	$(".btn_menu").click(function(){
		if(c==1){
		$("nav").animate({left: '0'});
		c=0;
		}else{
		$("nav").animate({left: '-100%'});
		c=1;
		}
	});*/
});