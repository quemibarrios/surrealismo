<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contrasena = md5($_POST['contrasena']); 

    include("conector.php");

    $consulta = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, correo, contrasena) VALUES('$nombre','$apellido','$correo', '$contrasena')");

    // Una vez registrado, lo mandamos directo al login
    header("Location: form_login.php");
?>