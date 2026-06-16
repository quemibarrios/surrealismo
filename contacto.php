<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UMA | Manifiesto de Contacto</title>
  <link rel="stylesheet" href="./css/estilos.css" />
</head>

<body>

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
          <a href="./ernst.php">Ernst</a>
          <a href="./obras.php">Obras</a>
          <a href="./contacto.php">Contacto</a>
        </div>

        <!-- SALUDO INTEGRADO -->
        <?php if(isset($_SESSION['nombre'])): ?>
        <div style="display: flex; align-items: center; gap: 15px; margin-right: 10px;">
          <span style="color: var(--color-texto); font-size: 0.9rem; font-family: var(--fuente-cuerpo);">
              Hola, <strong style="color: var(--color-oro);"><?php echo $_SESSION['nombre']; ?></strong> 👋
          </span>
          <a href="salir.php" class="boton-vanguardia" style="margin:0; padding: 5px 12px; font-size: 0.8rem; border-color: rgba(197,168,92,0.4);">
              Salir
          </a>
        </div>
        <?php endif; ?>

        <!-- ÍCONO DE LOGIN INTERACTIVO -->
        <?php /*<a href="form_login.php" class="login-btn" style="display: flex; align-items: center; height: 20px;" title="Iniciar Sesión">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </a>*/ ?>
      
        <!-- LUPA DE BÚSQUEDA INTERACTIVA -->
        <div class="lupa-btn" onclick="toggleBuscador()" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>

        <div class="menu-icon" onclick="toggleMenu()">☰</div>
      </div>

      <form action="resultados_buscar.php" method="post" class="form-buscador-cabecera">
        <div class="buscador-desplegable" id="buscadorDesplegable">
          <div class="buscador-interno">
            <input type="search" name="buscar" placeholder="Buscar...">
            <button type="button" class="btn-cerrar-search" onclick="toggleBuscador()">✕</button>
          </div>
        </div>
      </form>

    </nav>
  </header>

  <main class="seccion-contacto">

  <!-- MENSAJE DE ÉXITO -->
  <?php if(isset($_GET['estado']) && $_GET['estado'] == 'enviado'): ?>
      <div style="background-color: var(--color-superficie); border: 1px solid var(--color-oro); color: var(--color-oro); padding: 20px; text-align: center; margin: 0 10vw 30px 10vw; font-family: var(--fuente-titulo); border-radius: 4px;">
          ¡Gracias por tu mensaje! Tu voz es fundamental para nosotros y te responderemos a la brevedad.
      </div>
    <?php endif; ?>

    <div class="contenedor-contacto-split">
      
      <div class="contacto-imagen">
        <img src="./img/el hijo del hombre.jpg" alt="Inspiración Surrealista">
        <div class="capa-filtro-contacto">
          <div class="frase-contacto">"La mente que concibe el surrealismo está viva."</div>
        </div>
      </div>

      <div class="contacto-formulario-bloque" style="justify-content: flex-start; padding: 45px;">
        <h1 class="titulo-contacto" style="font-size: 2.2rem; margin-bottom: 5px;">CONTACTO</h1>
        <p class="bajada-contacto">Recibimos con entusiasmo cada sugerencia e idea de nuestros lectores y nos esforzamos por mantener una comunicación fluida. Si tienes algo que decirnos, el espacio a continuación está abierto para ti.</p>
        
        <form action="enviar.php" method="POST" class="formulario-vanguardia">
          <div class="campo-grupo">
            <input type="text" name="nombre" placeholder="Nombre" maxlength="20" required>
          </div>
          
          <div class="campo-grupo">
            <input type="email" name="email" placeholder="Email" maxlength="50" required>
          </div>
          
          <div class="campo-grupo">
            <input type="text" name="teléfono" placeholder="Teléfono" maxlength="150" required>
          </div>
          
          <div class="campo-grupo">
            <textarea name="mensaje" placeholder="Mensaje" rows="5" maxlength="100" required></textarea>
          </div>
          
          <button type="submit" class="boton-enviar-contacto">ENVIAR CONSULTA</button>
        </form>
      </div>

    </div>
  </main>
  
  
  <footer class="footer" style="background-color: var(--color-superficie); padding: 20px; text-align: center; border-top: 1px solid rgba(197, 168, 92, 0.1); margin-top: auto;">
        <p style="color: var(--color-muted); font-size: 0.85rem; margin: 0;">&copy; 2026 UMA - Vanguardia Surrealista. Todos los derechos reservados.</p>
    </footer>

  <script>
    function toggleMenu() {
      const menu = document.getElementById("nav-links");
      menu.classList.toggle("activo");
    }

    function toggleBuscador() {
      const buscador = document.getElementById("buscadorDesplegable");
      buscador.classList.toggle("abierto");
      
      if (buscador.classList.contains("abierto")) {
        buscador.querySelector("input").focus();
      }
    }
  </script>

</body>
</html>