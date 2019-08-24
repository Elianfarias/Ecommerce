<?php

function redimensionarImagen($imagen, $ancho_f, $alto_f){
	

	//Extraemos algunos atributos de la imagen
	list($ancho_i, $alto_i, $nroTipo) = getimagesize($imagen);

	//Creamos una variable imagen a partir de la imagen original segun el tipo
	switch ($nroTipo) {
		case 1: $img_original=imagecreatefromgif($imagen);
			break;
		case 2: $img_original=imagecreatefromjpeg($imagen);
			break;
		case 3: $img_original=imagecreatefrompng($imagen);
			break;
			default: echo "Error";
	}

	//En base al ANCHO_FINAL calculamos el ALTO_FINAL que debe tener la imagen para mantener el aspecto
	$ratio_ancho= $ancho_f / $ancho_i; 
	$ratio_alto= $alto_f / $alto_i;
	
	$ratio_max = max($ratio_ancho, $ratio_alto);

	$nvo_ancho = $ancho_i * $ratio_max;
	$nvo_alto = $alto_i * $ratio_max;

	$cortar_ancho = $nvo_ancho - $ancho_f;
	$cortar_alto = $nvo_alto - $alto_f;

	$desplazamiento = 0.5;

	$nueva_img = imagecreatetruecolor($ancho_f, $alto_f);

	imagecopyresampled($nueva_img, $img_original, -$cortar_ancho * $desplazamiento, -$cortar_alto * $desplazamiento, 0, 0, $ancho_f + $cortar_ancho, $alto_f + $cortar_alto, $ancho_i, $alto_i);

	imagedestroy($img_original);

	$calidad = 60;

	$nombre_imagen=time()."-".$imagen;

	imagejpeg($nueva_img, "libros/".$nombre_imagen,$calidad);

	return $nombre_imagen;
}

?>