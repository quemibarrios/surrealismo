<?php
// Conectar con la base de datos
include_once("conector.php");

// Recibimos los datos del formulario por POST
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Envío de correo
$destinatario = "tu-email@dominio.com";
$asunto = "Nueva consulta desde la web";
$cuerpo = "Nombre: ".$nombre. " | Email: ".$email." | Teléfono: ".$telefono." | Mensaje: ".$mensaje;
$cabeceras = "From: akemibarrios@gmail.com";
mail($destinatario, $asunto, $cuerpo, $cabeceras);

// Inserción en BD
$consulta = mysqli_query($conexion, "INSERT INTO contacto (nombre, email, telefono, mensaje) VALUES ('$nombre', '$email', '$telefono', '$mensaje')") or die(mysqli_error($conexion));

mysqli_close($conexion);

// Redirección profesional a contacto.php con un parámetro de estado
header("Location: contacto.php?estado=enviado");
exit();
?>