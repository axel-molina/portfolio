<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "ivanmolina052@gmail.com";
$asunto = "Enviado desde sitio web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
$mail = mail($destinatario, $asunto, $carta);
if($mail){
    header("Location:mensaje.html");
}

?>