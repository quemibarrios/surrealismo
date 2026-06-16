<?php
    session_start();
    session_destroy(); // Borra la sesión del servidor
    header("Location: index.php"); // Lo devuelve al inicio de la web
?>