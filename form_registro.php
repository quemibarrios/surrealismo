<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>UMA | Registro</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body style="background-color: var(--color-fondo); color: var(--color-texto); padding-top: 120px; display: flex; flex-direction: column; min-height: 100vh; margin: 0;">

    <header class="header">
        <nav class="nav">
            <div class="nav-logo">
                <a href="./index.php" class="logo-texto">UMA</a>
            </div>
            <div class="nav-derecha-contenedor">
                <div class="nav-links" id="nav-links">
                    <a href="./surrealismo.php">Surrealismo</a>
                    <a href="./breton.php">Breton</a>
                    <a href="./miro.php">Miró</a>
                    <a href="./magritte.php">Magritte</a>
                    <a href="./dali.php">Dalí</a>
                    <a href="./obras.php">Obras</a>
                    <a href="./contacto.php">Contacto</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="seccion-contacto" style="max-width: 550px; margin: 0 auto; padding: 50px 0;">
        <div class="contacto-formulario-bloque" style="background-color: var(--color-superficie); border: 1px solid rgba(197, 168, 92, 0.15); padding: 40px; border-radius: 6px;">
            
            <div style="text-align: center; margin-bottom: 30px;">
                <h2 class="titulo-contacto" style="color: var(--color-oro); font-family: var(--fuente-titulo); margin-bottom: 10px;">REGISTRATE</h2>
                <p style="color: var(--color-muted); font-size: 0.9rem; margin: 0;">Completá tus datos para crear una nueva cuenta.</p>
            </div>
            
            <form action="registro.php" method="post" class="formulario-vanguardia">
                <div class="campo-grupo">
                    <input type="text" name="nombre" placeholder="Nombre" required />
                </div>
                <div class="campo-grupo">
                    <input type="text" name="apellido" placeholder="Apellido" required />
                </div>
                <div class="campo-grupo">
                    <input type="email" name="correo" placeholder="Correo electrónico" required />
                </div>
                <div class="campo-grupo">
                    <input type="password" name="contrasena" placeholder="Contraseña" maxlength="12" required />
                </div>
                <input type="submit" value="CREAR CUENTA" class="boton-enviar-contacto" /> 
            </form>
            
            <p style="text-align: center; margin-top: 25px; font-size: 0.9rem; color: var(--color-muted);">
                ¿Ya tenés cuenta? <a href="form_login.php" style="color: var(--color-oro); text-decoration: none; font-weight: 600;">Iniciá sesión acá</a>
            </p>
        </div>
    </main>

    <footer class="footer" style="background-color: var(--color-superficie); padding: 20px; text-align: center; border-top: 1px solid rgba(197, 168, 92, 0.1); margin-top: auto;">
        <p style="color: var(--color-muted); font-size: 0.85rem; margin: 0;">&copy; 2026 UMA - Vanguardia Surrealista. Todos los derechos reservados.</p>
    </footer>
</body>
</html>