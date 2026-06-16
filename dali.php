<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UMA | Salvador Dalí: El Método Paranoico-Crítico</title>
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
        <img src="./img/dali.jpg" alt="Salvador Dalí - Retrato Conceptual">
        <div class="capa-filtro-contacto">
          <div class="frase-contacto">Figueres, 1904 – 1989</div>
        </div>
      </div>

      <div class="contacto-formulario-bloque" style="justify-content: flex-start; padding: 45px;">
        <h1 class="titulo-contacto" style="font-size: 2.2rem; margin-bottom: 5px;">SALVADOR DALÍ</h1>
        <h2 style="font-family: var(--fuente-cuerpo); font-size: 0.9rem; color: var(--color-oro); letter-spacing: 2px; text-transform: uppercase; margin-bottom: 25px; font-weight: 400;">Mística, Onirismo y Revolución Técnica</h2>
        
        <div style="font-family: var(--fuente-cuerpo); font-size: 0.95rem; color: var(--color-texto); line-height: 1.8; font-weight: 300; display: flex; flex-direction: column; gap: 15px; text-align: justify;">
          <p>
            Salvador Dalí es, sin lugar a dudas, la figura más icónica y teatral del movimiento surrealista. Nacido en Figueres, Cataluña, demostró desde su juventud una destreza técnica excepcional que asimiló tanto el clasicismo renacentista como las vanguardias de su tiempo. Su incorporación formal al grupo surrealista en París en 1929 supuso una revolución gracias a la formulación de su aclamado <strong>método paranoico-crítico</strong>.
          </p>
          <p>
            A diferencia de la escritura automática promovida por André Breton, que dependía de la pasividad del inconsciente, el método de Dalí era un proceso activo. Consistía en cultivar un estado de delirio controlado para interpretar las asociaciones obsesivas de la mente, capturándolas luego con una precisión hiperrealista que él mismo denominaba "fotografías del sueño pintadas a mano". Su universo iconográfico de relojes blandos, elefantes de patas zancudas y hormigas convirtió los paisajes desérticos de la Costa Brava en mapas de la psique humana.
          </p>
          <p>
            Su compleja personalidad, marcada por un exhibicionismo calculada y una relación simbiótica con su musa Gala, lo llevó a explorar disciplinas que iban más allá de la pintura, incluyendo el cine (colaborando con Luis Buñuel en <em>Un Chien Andalou</em>), la escultura, la alta costura y el diseño de joyas. Aunque fue expulsado del núcleo hermético de Breton debido a diferencias ideológicas, Dalí consolidó el surrealismo a nivel global, demostrando que los sueños poseen una realidad tan nítida y rigurosa como el mundo de la vigilia.
          </p>
        </div>
      </div>

    </div>
  </main>

  <div style="background-color: rgba(197, 168, 92, 0.02); padding: 40px 10vw; text-align: center; border-top: 1px solid rgba(197, 168, 92, 0.05); border-bottom: 1px solid rgba(197, 168, 92, 0.05);">
    <p style="font-family: var(--fuente-titulo); color: var(--color-oro); font-size: 1.4rem; font-style: italic; letter-spacing: 1px; max-width: 800px; margin: 0 auto; line-height: 1.6;">
      "La única diferencia entre un loco y yo, es que yo no estoy loco. La diferencia entre los surrealistas y yo, es que Yo soy el Surrealismo."
    </p>
  </div>

  <div class="contenedor-catalogo">
    <h2 class="recuadro" style="margin-top: 20px;">COLECCIÓN PRIVADA DE DALÍ</h2>
    
    <div class="grilla-museografica">
      
      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/la persistencia de la memoria.jpg" alt="La persistencia de la memoria">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            El surrealismo buscó plasmar el inconsciente desafiando las leyes de la lógica y el tiempo. <br>
            <span style="color: var(--color-oro); font-weight: bold;">Salvador Dalí. La persistencia de la memoria, 1931.</span>
          </p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/el gran masturbador.jpg" alt="El gran masturbador">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            La libre asociación de ideas dio lugar a imágenes nacidas de los sueños y las obsesiones. <br>
            <span style="color: var(--color-oro); font-weight: bold;">Salvador Dalí. El gran masturbador, 1929.</span>
          </p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="obras.php">
          <div class="marco-imagen">
            <img src="./img/bandeja de objetos.jpg" alt="Bandeja de Objetos Surrealistas">
            <div class="capa-zoom"><span>VER ANÁLISIS COMPLETO</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <p class="epigrafe-museo" style="font-size: 0.85rem; line-height: 1.4; color: #ccc; margin-top: 10px;">
            El surrealismo desarrolló técnicas artísticas a partir del juego y la experimentación. <br>
            <span style="color: var(--color-oro); font-weight: bold;">Salvador Dalí. Bandeja de objetos, 1936.</span>
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