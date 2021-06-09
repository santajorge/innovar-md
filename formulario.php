<?php
$destino= "innovar.digital21@gmail.com";
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$correo= $_POST["correo"];
$medio= $_POST["medio"];
$comentarios= $_POST["comentarios"];

$contenido= "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $correo . "\nMedio: " .$medio . "\nComentario: " . $comentarios;

mail($destino, "mensaje" $contenido);
header("location:index.html");
?>