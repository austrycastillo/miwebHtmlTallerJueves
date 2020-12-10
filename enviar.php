<?php
	
		//1) Recibir los valores desde el formulario
		$nombre = $_POST["nombre"];
		$correo = $_POST["correo"];
		$mensaje = $_POST["mensaje"];
		$cuerpo = "<h1>Datos de contacto</h1>";
		$cuerpo.= "<p><strong>Nombre:</strong> " . $nombre . "</p>";
		$cuerpo.= "<p><strong>E-Mail:</strong> " . $correo . "</p>";
		$cuerpo.= "<p><strong>Mensaje:</strong>" . $mensaje . "</p>";
		
		//2) Destinatario
		$destinatario = "castilloaustry@gmail.com";

		//3) Asunto del correo
		$asunto = "Contacto desde mi web";

		//4) Construir la cabecera del email
		$cabecera = "From:" . $destinatario . "\r\n";
		$cabecera.= "MIME-Version: 1.0\r\n";
		$cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";
	

		//5) Enviar el email
			if ( !mail($destinatario, $asunto, $cuerpo, $cabecera)) {
				echo "E-Mail no enviado";
				 
			} else {
				echo "E-Mail  enviado";
				
			}
	

?>