<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];


$para = "consejodeunlibro@gmail.com";
$asunto = "Nuevo Mensaje de $nombre";

$mensaje = "
Nombre del remitente: ".$nombre."
correo: ".$email."
mensaje: ".$mensaje."

";



mail($para, $asunto,utf8_decode($mensaje));

header("lacation: Formulario_contacto.html");


?>