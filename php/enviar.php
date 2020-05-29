<?php
//llamar los campos
$nombre = $_POST['nombre'];
$mail = $_POST['correo'];
$empresa = $_POST['mensaje'];

//Datos del correo
$para = "ccampos.geminis@gmail.com";
$asunto = "Mensaje de mi sitio web";

//contenido
$mensaje = "De: $nombre \n";
$mensaje .= "Correo: $mail \n";
$mensaje .= "Mensaje: $empresa";

//envio
mail($para, $asunto, $mensaje);
header("../index.html");

//$header = 'From: ' . $mail . " \r\n";
//$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
//$header .= "Mime-Version: 1.0 \r\n";
//$header .= "Content-Type: text/plain";
?>
