<?php 

/*Funcion que nos permite eliminar las imagenes que tengamos en las carpetas de fotos para no tener imagenes duplicadas*/

function eliminarImagenes($url, $extension_img){
	switch ($extension_img) {
		case '.gif':
			/*Condiciones que busca las extensiones sgtes y si existe la borra y las reemplaza por la que esta en el case*/
			if(file_exists($url.".png"))
				//metodo que elimina la extension encontrada
				unlink($url.".png");

		    if(file_exists($url.".jpg"))
				//metodo que elimina la extension encontrada
				unlink($url.".jpg");
			break;

		case '.jpg':
			/*Condiciones que busca las extensiones sgtes y si existe la borra y las reemplaza por la que esta en el case*/
			if(file_exists($url.".png"))
				//metodo que elimina la extension encontrada
				unlink($url.".png");

		    if(file_exists($url.".gif"))
				//metodo que elimina la extension encontrada
				unlink($url.".gif");
			break;

		case '.png':
			/*Condiciones que busca las extensiones sgtes y si existe la borra y las reemplaza por la que esta en el case*/
			if(file_exists($url.".gif"))
				//metodo que elimina la extension encontrada
				unlink($url.".gif");

		    if(file_exists($url.".jpg"))
				//metodo que elimina la extension encontrada
				unlink($url.".jpg");
			break;
	}
}

//Funcion para subir la imagen que se eligio

function cargar_imagen($tipo, $imagen, $email){
	//Condicion que evalua la extension de la imagen  que hemos subido
	if(strstr($tipo, "image")){
		//Condicion para saber que tipo de extension de imagen se ha cargado
		if(strstr($tipo, "jpeg"))
			$extension_img = ".jpg";
		else 
		//Condicion para saber que tipo de extension de imagen se ha cargado
		if(strstr($tipo, "png"))
			$extension_img = ".png";
		else
		//Condicion para saber que tipo de extension de imagen se ha cargado
		if(strstr($tipo, "gif"))
			$extension_img = ".gif";
		/*Metodos para saber si la imagen tiene el ancho que requerimos que tenga 600px de ancho*/
		$tam_img = getimagesize($imagen);
		$ancho_img = $tam_img[0];
		$alto_img = $tam_img[1];
		$ancho_img_requerida = 600;

		/*Condicion que evalua si la imagen que se subio es mayor a 600px y si es mayoe la ajustamos a a su tamaño requerido a 600px*/
		if ($ancho_img > $ancho_img_requerida) {
			/*Metodos para ajustar la imagen al tamaño requerido*/
			$ancho_nuevo_img = $ancho_img_requerida;
			$alto_nuevo_img = ($alto_img/$ancho_img) * $ancho_nuevo_img;
			/*Metodo para crear una imagen con las nuevas dimensiones requeridas*/
			$img_ajusta =  imagecreatetruecolor($ancho_nuevo_img, $alto_nuevo_img);

			/*switch que crea una imagen basandose en la original dependiendo de la extension de la imagen*/
			switch ($extension_img) {
				case '.jpg':
				$img_original = imagecreatefromjpeg($imagen);
				//ajustamos la imagen nueva basada en la original
				imagecopyresampled($img_ajusta, $img_original, 0, 0, 0, 0, $ancho_nuevo_img, $alto_nuevo_img, $ancho_img, $alto_img);
				//Guardamos la imagen ajustada en el servidor
				$nom_img_extension = "../fotos/".$email.$extension_img;
				$nombre_img = "../fotos/".$email;
				imagejpeg($img_ajusta, $nom_img_extension,100);
				/*Funcion para borrar las imagens dobles que tengamos ne la carpeta de fotos osea imagenes que tenga el mismo nombre */
				eliminarImagenes($nombre_img, ".jpg");
					break;

				case '.png':
				$img_original = imagecreatefromjpeg($imagen);
				//ajustamos la imagen nueva basada en la original
				imagecopyresampled($img_ajusta, $img_original, 0, 0, 0, 0, $ancho_nuevo_img, $alto_nuevo_img, $ancho_img, $alto_img);
				//Guardamos la imagen ajustada en el servidor
				$nom_img_extension = "../fotos/".$email.$extension_img;
				$nombre_img = "../fotos/".$email;
				imagejpeg($img_ajusta, $nom_img_extension,100);
				/*Funcion para borrar las imagens dobles que tengamos ne la carpeta de fotos osea imagenes que tenga el mismo nombre */
				eliminarImagenes($nombre_img, ".png");
					break;
				case '.gif':
				$img_original = imagecreatefromjpeg($imagen);
				//ajustamos la imagen nueva basada en la original
				imagecopyresampled($img_ajusta, $img_original, 0, 0, 0, 0, $ancho_nuevo_img, $alto_nuevo_img, $ancho_img, $alto_img);
				//Guardamos la imagen ajustada en el servidor
				$nom_img_extension = "../fotos/".$email.$extension_img;
				$nombre_img = "../fotos/".$email;
				imagejpeg($img_ajusta, $nom_img_extension,100);
				/*Funcion para borrar las imagens dobles que tengamos ne la carpeta de fotos osea imagenes que tenga el mismo nombre */
				eliminarImagenes($nombre_img, ".gif");
					break;
				
	
			}

				} else {
					//guardamos la url que tendra la imagen en el servidor
					$destino = "../fotos/".$email.$extension_img;
					//movemos la imagen a su destino
					move_uploaded_file($imagen, $destino);
					//ejecutamos la funcion para borrar las imagens dobles
					$nombre_img = "../fotos/".$email;
					eliminarImagenes($nombre_img,$extension_img);
				}
				//asignamos el nombre de la imagen que se guarda en la bd como una cadena de texto
				$imagen = $email.$extension_img;
				return $imagen;

	} else {
		return false;
	}

}

 ?>

