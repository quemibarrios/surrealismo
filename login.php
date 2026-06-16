<?php 
session_start(); 
$correo = $_POST['correo'];
$contraseña = md5($_POST['contraseña']);

include("conector.php");

$consulta = mysqli_query($conexion, "SELECT nombre, apellido FROM usuarios WHERE correo='$correo' AND contrasena='$contraseña'");
$resultado = mysqli_num_rows($consulta);

if($resultado != 0){
    $respuesta = mysqli_fetch_assoc($consulta);

    // Guardamos en la sesión de PHP
    $_SESSION['nombre'] = $respuesta['nombre'];
    $_SESSION['apellido'] = $respuesta['apellido'];
    
    // ÉXITO: Redireccionamos a obras con el parámetro para el saludo[cite: 7]
    header("Location: obras.php?login=exitoso");
    exit(); 
} else {
    // FALLA: Redirigimos al formulario enviando el código de error[cite: 7]
    header("Location: form_login.php?error=datos_incorrectos");
    exit();
}
?>