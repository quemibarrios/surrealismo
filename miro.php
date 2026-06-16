<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UMA | Joan Miró: El Lenguaje de los Signos y el Automatismo Poético</title>
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
        <img src="./img/miro.jpg" alt="Joan Miró - Retrato Conceptual">
        <div class="capa-filtro-contacto">
          <div class="frase-contacto">Barcelona, 1893 – Palma de Mallorca, 1983</div>
        </div>
      </div>

      <div class="contacto-formulario-bloque" style="justify-content: flex-start; padding: 45px;">
        <h1 class="titulo-contacto" style="font-size: 2.2rem; margin-bottom: 5px;">JOAN MIRÓ</h1>
        <h2 style="font-family: var(--fuente-cuerpo); font-size: 0.9rem; color: var(--color-oro); letter-spacing: 2px; text-transform: uppercase; margin-bottom: 25px; font-weight: 400;">Línea, Color y el Asesinato de la Pintura Tradicional</h2>
        
        <div style="font-family: var(--fuente-cuerpo); font-size: 0.95rem; color: var(--color-texto); line-height: 1.8; font-weight: 300; display: flex; flex-direction: column; gap: 15px; text-align: justify;">
          <p>
            Joan Miró es uno de los máximos exponentes del surrealismo, dueño de un universo estético inmediatamente reconocible que desafió los cimientos mismos de la representación académica. Nacido en Barcelona, su transición hacia la vanguardia estuvo marcada por una profunda conexión con la tierra catalana y un deseo radical de desmantelar los métodos burgueses de la pintura convencional, una postura extrema que él mismo denominó con la famosa frase el "asesinato de la pintura".
          </p>
          <p>
            Su llegada a París en la década de 1920 lo vinculó estrechamente con André Breton y el grupo surrealista inicial. Breton, fascinado por la libertad de sus lienzos, llegó a declarar que Miró era "el más surrealista de todos nosotros". A diferencia de la vertiente ilusionista del movimiento, Miró encarnó de forma pura el automatismo psíquico e intuitivo. Su técnica consistía en vaciar la mente para permitir que las formas surgieran de manera orgánica sobre el soporte, creando un alfabeto visual único compuesto por formas biomórficas, constelaciones, ojos flotantes, líneas etéreas y lunas suspendidas sobre campos cromáticos vibrantes.
          </p>
          <p>
            A lo largo de su carrera, Miró expandió su búsqueda poética hacia la escultura monumental, la cerámica, el grabado y el tapiz, manteniendo siempre una pureza casi infantil en el trazo combinada con un riguroso equilibrio compositivo. Su obra no busca retratar el mundo exterior, sino construir un puente directo hacia la psique y el mito primigenio. Al despojar a sus figuras de volumen y perspectiva tridimensional, Miró demostró que la máxima abstracción puede ser el camino más corto para revelar las verdades más profundas, líricas y complejas del subconsciente humano.
          </p>
        </div>
      </div>

    </div>
  </main>

  <div style="background-color: rgba(197, 168, 92, 0.02); padding: 40px 10vw; text-align: center; border-top: 1px solid rgba(197, 168, 92, 0.05); border-bottom: 1px solid rgba(197, 168, 92, 0.05);">
    <p style="font-family: var(--fuente-titulo); color: var(--color-oro); font-size: 1.4rem; font-style: italic; letter-spacing: 1px; max-width: 800px; margin: 0 auto; line-height: 1.6;">
      "Un cuadro no debe terminar ahí, debe saltar a la vista, debe sembrar semillas en la mente del espectador. Yo pinto igual que lloro, igual que respiro."
    </p>
  </div>

  <div class="contenedor-catalogo">
    <h2 class="recuadro" style="margin-top: 20px;">COLECCIÓN PRIVADA DE MIRÓ</h2>
    
    <div class="grilla-museografica">
      
      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/interior holandes.jpg" alt="Interior holandés I">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            La reinterpretación de la pintura clásica a través de la fantasía biomórfica surrealista. <br>
            <span style="color: var(--color-oro); font-weight: bold;">Joan Miró. Interior holandés I, 1928.</span>
          </p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/tierra labrada.jpg" alt="La tierra labrada">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            El paisaje rural catalán es alterado por la introducción de simbología anatómica. <br>
            <span style="color: var(--color-oro); font-weight: bold;">Joan Miró. La tierra labrada, 1924.</span>
          </p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/carnaval de alerquin.jpg" alt="El carnaval de Arlequín">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            El automatismo psíquico se transforma en una fiesta de formas libres, signos y colores. <br>
            <span style="color: var(--color-oro); font-weight: bold;">Joan Miró. El carnaval de Arlequín, 1925.</span>
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