<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UMA | Max Ernst: Alquimia y Texturas Surrealistas</title>
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

  <main class="seccion-contacto" style="padding-bottom: 20px;">
    <div class="contenedor-contacto-split" style="min-height: 650px;">
      
      <div class="contacto-imagen">
        <img src="./img/ernst.jpg" alt="Max Ernst - Retrato Conceptual">
        <div class="capa-filtro-contacto">
          <div class="frase-contacto">Brühl, 1891 – París, 1976</div>
        </div>
      </div>

      <div class="contacto-formulario-bloque" style="justify-content: flex-start; padding: 45px;">
        <h1 class="titulo-contacto" style="font-size: 2.2rem; margin-bottom: 5px;">MAX ERNST</h1>
        <h2 style="font-family: var(--fuente-cuerpo); font-size: 0.9rem; color: var(--color-oro); letter-spacing: 2px; text-transform: uppercase; margin-bottom: 25px; font-weight: 400;">Innovación Técnica, Alquimia Visual y Mitología de la Selva</h2>
        
        <div style="font-family: var(--fuente-cuerpo); font-size: 0.95rem; color: var(--color-texto); line-height: 1.8; font-weight: 300; display: flex; flex-direction: column; gap: 15px; text-align: justify;">
          <p>
            Max Ernst es uno de los artistas más polifacéticos, experimentales e influyentes del arte del siglo XX. Tras haber sido un pilar fundamental del movimiento Dadaísta en Alemania tras los traumas de la Gran Guerra, Ernst se trasladó a París para convertirse en pionero indiscutible de las artes plásticas surrealistas, aportando una dimensión de alquimia material y experimentación técnica que enriqueció profundamente el lenguaje visual del grupo fundado por André Breton.
          </p>
          <p>
            Para sortear las trampas de la conciencia racional y la destreza académica tradicional, Ernst inventó y perfeccionó metodologías basadas en el automatismo físico. Desarrolló el <strong>frottage</strong> (frotar grafito sobre papel colocado encima de superficies texturadas como maderas viejas u hojas) y el <strong>grattage</strong> (raspar capas de óleo fresco sobre lienzos), técnicas que revelaban imágenes accidentadas ocultas en la materia. Su fascinación por el collage de grabados antiguos y la mitología personal —representada en su alter ego alado Loplop— dio forma a un universo denso y enigmático.
          </p>
          <p>
            Su producción madura exploró los arquetipos de bosques petrificados, aves antropomórficas y arquitecturas en ruinas, evocando paisajes geológicos que parecen pertenecer a eras remotas o a dimensiones postapocalípticas. Perseguido durante la Segunda Guerra Mundial y exiliado más tarde en los Estados Unidos (donde influyó de forma crucial en el surgimiento del expresionismo abstracto), Ernst expandió incansablemente los límites de la pintura, la escultura y los grabados, demostrando que el lienzo es un campo vivo de revelaciones accidentales.
          </p>
        </div>
      </div>

    </div>
  </main>

  <div style="background-color: rgba(197, 168, 92, 0.02); padding: 40px 10vw; text-align: center; border-top: 1px solid rgba(197, 168, 92, 0.05); border-bottom: 1px solid rgba(197, 168, 92, 0.05);">
    <p style="font-family: var(--fuente-titulo); color: var(--color-oro); font-size: 1.4rem; font-style: italic; letter-spacing: 1px; max-width: 800px; margin: 0 auto; line-height: 1.6;">
      "El pintor surrealista no tiene la tarea de recrear la realidad, sino la de revelar los misterios que duermen bajo la superficie de las texturas accidentadas del mundo."
    </p>
  </div>

  <div class="contenedor-catalogo">
    <h2 class="recuadro" style="margin-top: 20px;">COLECCIÓN PRIVADA DE ERNST</h2>
    
    <div class="grilla-museografica">
      
      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/la virgen castigando.jpg" alt="La Virgen castigando al Niño Jesús">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            Una obra transgresora que utiliza texturas inesperadas libres del control racional. <br>
            <span style="color: var(--color-oro); font-weight: bold;">Max Ernst. La Virgen castigando al Niño Jesús, 1926.</span>
          </p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/europa despues de la lluvia.jpg" alt="Europa después de la lluvia II">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            La técnica de la decalcomanía genera escenarios apocalípticos surgidos del inconsciente. <br>
            <span style="color: var(--color-oro); font-weight: bold;">Max Ernst. Europa después de la lluvia II, 1942.</span>
          </p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/el elefante.jpg" alt="El elefante de Célebes">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            La estética de un colosal artefacto mecánico se combina con formas y lógicas del absurdo. <br>
            <span style="color: var(--color-oro); font-weight: bold;">Max Ernst. El elefante de Célebes, 1921.</span>
          </p>
        </div>
      </article>

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
  </script>

</body>
</html>