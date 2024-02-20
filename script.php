<?php

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configurar el correo electrónico
$destinatario = "fguzman@consuit.com.ar";
$asunto = "Contacto a través de web Lares";
$cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";

// Enviar el correo electrónico
mail($destinatario, $asunto, $cuerpo);

?>