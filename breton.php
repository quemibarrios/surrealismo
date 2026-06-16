<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UMA | André Breton: El Manifiesto Surrealista</title>
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
        <img src="./img/breton.jpg" alt="André Breton - Retrato Conceptual">
        <div class="capa-filtro-contacto">
          <div class="frase-contacto">Tinchebray, 1896 – París, 1966</div>
        </div>
      </div>

      <div class="contacto-formulario-bloque" style="justify-content: flex-start; padding: 45px;">
        <h1 class="titulo-contacto" style="font-size: 2.2rem; margin-bottom: 5px;">ANDRÉ BRETON</h1>
        <h2 style="font-family: var(--fuente-cuerpo); font-size: 0.9rem; color: var(--color-oro); letter-spacing: 2px; text-transform: uppercase; margin-bottom: 25px; font-weight: 400;">Fundador, Teórico y Arquitecto del Inconsciente</h2>
        
        <div style="font-family: var(--fuente-cuerpo); font-size: 0.95rem; color: var(--color-texto); line-height: 1.8; font-weight: 300; display: flex; flex-direction: column; gap: 15px; text-align: justify;">
          <p>
            André Breton no solo fue un participante del surrealismo, sino su principal ideólogo, guardián doctrinario y legislador estético. Escritor, poeta y ensayista francés, Breton canalizó su desencanto con el racionalismo de la sociedad occidental —el cual consideraba responsable directo de los horrores de la Primera Guerra Mundial— hacia la fundación de un movimiento revolucionario que uniera el arte, la literatura y la liberación psicológica total del individuo.
          </p>
          <p>
            Habiendo trabajado en hospitales psiquiátricos durante el conflicto bélico, Breton asimiló con fervor las teorías del psicoanálisis de Sigmund Freud sobre el inconsciente y la interpretación de los sueños. En 1924, publicó el histórico <em>Manifiesto del Surrealismo</em>, definiéndolo formalmente como un "automatismo psíquico puro" a través del cual se propone expresar el funcionamiento real del pensamiento en ausencia de todo control ejercido por la razón y al margen de cualquier preocupación estética o moral.
          </p>
          <p>
            A través de su liderazgo carismático y frecuentemente autoritario, Breton editó revistas cruciales, organizó exposiciones internacionales y reclutó a los mejores pintores de la época, guiándolos para expandir los límites literarios hacia el plano visual. Su obra escrita, que incluye novelas icónicas como <em>Nadja</em> y poemarios vanguardistas, concibe la belleza no como una proporción clásica, sino como algo "convulsivo", un chispazo poético nacido del encuentro fortuito de realidades completamente inconexas que detona una nueva comprensión del mundo.
          </p>
        </div>
      </div>

    </div>
  </main>

  <div style="background-color: rgba(197, 168, 92, 0.02); padding: 40px 10vw; text-align: center; border-top: 1px solid rgba(197, 168, 92, 0.05); border-bottom: 1px solid rgba(197, 168, 92, 0.05);">
    <p style="font-family: var(--fuente-titulo); color: var(--color-oro); font-size: 1.4rem; font-style: italic; letter-spacing: 1px; max-width: 800px; margin: 0 auto; line-height: 1.6;">
      "Querida imaginación, lo que más amo en ti es que jamás perdonas. El surrealismo es el automatismo psíquico puro por el cual se propone expresar el funcionamiento real del pensamiento."
    </p>
  </div>

  <div class="contenedor-catalogo">
    <h2 class="recuadro" style="margin-top: 20px;">EDICIONES HISTÓRICAS Y MANIFESTACIONES</h2>
    
    <div class="grilla-museografica">
      
      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/manifiesto.jpg" alt="Primer Manifiesto del Surrealismo">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            La teoría surrealista nació como una revolución poética y política contra el racionalismo. <br>
            <span style="color: var(--color-oro); font-weight: bold;">André Breton. Primer Manifiesto del Surrealismo, 1924.</span>
          </p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/nadja.jpg" alt="Nadja - Novela Surrealista">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            El azar de los encuentros cotidianos y las calles de París configuran una nueva realidad. <br>
            <span style="color: var(--color-oro); font-weight: bold;">André Breton. Nadja, 1928.</span>
          </p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/poema-objeto.jpg" alt="Poema-Objeto">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            La unión poética de palabras y objetos encontrados subvierte su utilidad unconventional. <br>
            <span style="color: var(--color-oro); font-weight: bold;">André Breton. Poema-Objeto, 1937.</span>
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