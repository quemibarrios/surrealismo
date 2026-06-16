<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "basededatos";

// Crear la conexion
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

// Verificar conexion
if (!$conexion) {
    die("Error de conexion: " . mysqli_connect_error());
}
?>

