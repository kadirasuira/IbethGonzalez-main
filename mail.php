<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Teléfono: $phone <br> Mensaje:".$_POST['message'];


	if(mail('serracinkadir@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>
