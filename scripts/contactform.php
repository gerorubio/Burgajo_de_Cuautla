<?php

	$nombre_error = $email_error = $asunto_error = $mensaje_error = $mensaje_exito = "";
	$nombre = $correoDe = $asunto = $mensaje = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if (isset($_POST['enviar'])) {
			$nombre = $_POST['nmbre'];
			$correoDe = $_POST['crreo'];
			$asunto = $_POST['asnto'];
			$mensaje = $_POST['mnsje'];
		}
			//Valida el nombre si esta vacio o tiene caracteres diferentes de espacios en blanco o letras
			if(empty($nombre)){
				$nombre_error = "Ingrese su nombre";
			}elseif (!preg_match("/^[a-zA-Z]*$/", $nombre)) {
				$nombre_error = "Solo se permite letras y espacios en blanco";
			}
			//Valida que el correo no este vacio y sea valido
			if(empty($correoDe)){
				$email_error = "Ingrese su correo";
			}elseif (!filter_var($correoDe, FILTER_VALIDATE_EMAIL)) {
				$nombre_error = "Correo no válido";
			}
			//Valida que el asunto no este vacio
			if(empty($asunto)){
				$asunto_error = "Ingrese el asunto";
			}
			//Valida que el mensaje no este vacio
			if(empty($mensaje)){
				$mensaje_error = "Ingrese el mensaje";
			}
			if ($nombre_error == '' and $email_error == "" and $mensaje_error == "" and $asunto_error == "") {
				$mailTo = "burgajocuautla@hotmail.com";
				$headers = "From: ".$correoDe;
				$txt = "Se recibio un correo de ".$nombre.".\n\n".$mensaje;

				mail($mailTo, $asunto, $txt, $headers);
				$mensaje_exito = "Mensaje enviado con exito. En breve nos pondremos en contacto con usted.";
				$nombre = $correoDe = $asunto = $mensaje = "";
				header("Location: ../index.html?mailsend");
			}
	}
	
?>