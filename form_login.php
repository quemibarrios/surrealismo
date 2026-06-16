<?php session_start(); ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>UMA | Iniciar Sesión</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body style="background-color: var(--color-fondo); color: var(--color-texto); padding-top: 120px; display: flex; flex-direction: column; min-height: 100vh; margin: 0;">

  <header class="header">
    <nav class="nav">
      <div class="nav-logo"><a href="./index.php" class="logo-texto">UMA</a></div>
      <div class="nav-links" id="nav-links">
          <a href="./surrealismo.php">Surrealismo</a>
          <a href="./breton.php">Breton</a>
          <a href="./miro.php">Miró</a>
          <a href="./magritte.php">Magritte</a>
          <a href="./dali.php">Dalí</a>
          <a href="./ernst.php">Ernst</a>
          <a href="./obras.php">Obras</a>
          <a href="./contacto.php">Contacto</a>
      </div>
    </nav>
  </header>

  <main class="seccion-contacto" style="max-width: 550px; margin: 0 auto; padding: 50px 0;">
      <div class="contacto-formulario-bloque" style="background-color: var(--color-superficie); padding: 40px; border-radius: 15px; border: 1px solid rgba(197, 168, 92, 0.2);">
          
          <div style="text-align: center; margin-bottom: 30px;">
            <?php if(isset($_GET['acceso']) && $_GET['acceso'] == 'restringido'): ?>
                <div style="background-color: var(--color-superficie); border: 1px solid var(--color-oro); color: var(--color-texto); padding: 20px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
    <h3 style="color: var(--color-oro); margin: 0 0 10px 0;">¡Contenido Exclusivo!</h3>
    <p style="margin: 0; font-size: 0.95rem;">Este espacio solo es accesible para usuarios registrados. Ingresa tus datos para continuar.</p>
</div>
            <?php elseif(isset($_GET['error']) && $_GET['error'] == 'datos_incorrectos'): ?>
                <div style="background-color: #ffcccc; border: 1px solid #ff4d4d; color: #990000; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <h3 style="margin: 0 0 5px 0;">Error de Acceso</h3>
                    <p style="margin: 0;">El correo o la contraseña son incorrectos. Intentá de nuevo.</p>
                </div>
            <?php else: ?>
                <h2 class="titulo-contacto" style="text-align: center; margin-bottom: 10px;">INICIAR SESIÓN</h2>
                <p style="color: var(--color-muted); font-size: 0.9rem; margin: 0;">Ingresá tus datos para acceder a tu cuenta.</p>
            <?php endif; ?>
          </div>
          
          <form action="login.php" method="post" class="formulario-vanguardia">
              <div class="campo-grupo">
                  <input name="correo" type="email" placeholder="Correo electrónico" required />
              </div>
              <div class="campo-grupo">
                  <input type="password" name="contraseña" placeholder="Contraseña" maxlength="12" required />
              </div>
              <input type="submit" value="INGRESAR" class="boton-enviar-contacto" /> 
          </form>
          
          <p style="text-align: center; margin-top: 25px; font-size: 0.9rem; color: var(--color-muted);">
              ¿No sos usuario? <a href="form_registro.php" style="color: var(--color-oro); text-decoration: none; font-weight: 600;">Registrate acá</a>
          </p>
      </div>
  </main>

  <footer class="footer" style="background-color: var(--color-superficie); padding: 20px; text-align: center; border-top: 1px solid rgba(197, 168, 92, 0.1); margin-top: auto;">
      <p style="color: var(--color-muted); font-size: 0.85rem; margin: 0;">&copy; 2026 UMA - Vanguardia Surrealista. Todos los derechos reservados.</p>
  </footer>

</body>
</html>