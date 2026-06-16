<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UMA | Vanguardia Surrealista</title>
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

  <!-- SECCIÓN SLIDER INTERACTIVO -->
  <section class="slider">
    <div class="slider-container">
      
      <!-- Slide 1 -->
      <div class="slide-wrapper active">
        <img class="slide" src="./img/tierra labrada.jpg" alt="Joan Miró - La Tierra Labrada" style="display:block;">
        <div class="slide-overlay">
          <h2 class="slide-caption-title">El Automatismo Psíquico</h2>
          <p class="slide-caption-text">Creación pura y libre, permitiendo que las formas del inconsciente broten sin el control de la razón.</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="slide-wrapper">
        <img class="slide" src="./img/los amantes.jpg" alt="René Magritte - Los Amantes" style="display:block;">
        <div class="slide-overlay">
          <h2 class="slide-caption-title">La Traición de las Imágenes</h2>
          <p class="slide-caption-text">El misterio de lo oculto: desafiando la lógica visual mediante la deconstrucción del paisaje y el lenguaje.</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="slide-wrapper">
        <img class="slide" src="./img/la tentacion de san antonio.jpg" alt="Salvador Dalí - La Tentación de San Antonio" style="display:block;">
        <div class="slide-overlay">
          <h2 class="slide-caption-title">Mundos Oníricos</h2>
          <p class="slide-caption-text">Paisajes del subconsciente donde el tiempo y el espacio se deforman bajo la profunda lógica del sueño.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- SECCIÓN ARTISTAS -->
  <main class="seccion-artistas">
    
    <div class="tarjeta-artista">
      <img src="./img/breton.jpg" alt="André Breton" />
      <div class="info-artista">
        <h3>André Breton</h3>
        <a href="./breton.php" class="boton-vanguardia">VER DETALLES</a>
      </div>
    </div>

    <div class="tarjeta-artista">
      <img src="./img/miro.jpg" alt="Joan Miró" />
      <div class="info-artista">
        <h3>Joan Miró</h3>
        <a href="./miro.php" class="boton-vanguardia">VER DETALLES</a>
      </div>
    </div>

    <div class="tarjeta-artista">
      <img src="./img/magritte.jpg" alt="René Magritte" />
      <div class="info-artista">
        <h3>René Magritte</h3>
        <a href="./magritte.php" class="boton-vanguardia">VER DETALLES</a>
      </div>
    </div>

    <div class="tarjeta-artista">
      <img src="./img/dali.jpg" alt="Salvador Dalí" />
      <div class="info-artista">
        <h3>Salvador Dalí</h3>
        <a href="./dali.php" class="boton-vanguardia">VER DETALLES</a>
      </div>
    </div>

  </main>

  <h2 class="recuadro">OBRAS DESTACADAS</h2>

  <div class="vitrina-conceptos">
    <div class="bloque-editorial">
      <a href="./obras.php">
        <img src="./img/obra1.jpg" alt="Obra Surrealista">
      </a>
      <div class="metadatos-obra">
        <div class="autor-nombre">Salvador Dalí</div>
        <div class="obra-titulo">La persistencia de la memoria (1931)</div>
      </div>
    </div>
    <div class="bloque-editorial">
      <a href="./obras.php">
        <img src="./img/obra2.jpg" alt="Obra Surrealista">
      </a>
      <div class="metadatos-obra">
        <div class="autor-nombre">René Magritte</div>
        <div class="obra-titulo">La traición de las imágenes (1929)</div>
      </div>
    </div>
  </div>

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

    // Lógica del Slider automático para index.php (6 segundos)
    let currentSlide = 0;
    const slides = document.querySelectorAll(".slide-wrapper");
    if (slides.length > 0) { 
      setInterval(() => {
        slides[currentSlide].classList.remove("active");
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add("active");
      }, 6000); 
    }
  </script>

</body>
</html>