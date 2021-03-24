<?php

//llamando a los campos=======================

$nombre = $_POST['nombr'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


//Datos para el correo

$destinatario = "consejodeunlibro@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta.= "Telefono: $telefono \n";
$carta.= "Mensaje: $mensaje";

//Enviando mensaje
mail($destinatario, $asunto, $carta)
header('Location:mensaje-de-envio.html')


?>