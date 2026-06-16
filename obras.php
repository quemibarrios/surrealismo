<?php
session_start();

// Si el usuario NO está logueado, lo enviamos al login con el parámetro "acceso=restringido"
if(!isset($_SESSION['nombre'])){
    header("Location: form_login.php?acceso=restringido");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UMA | Catálogo de Obras</title>
  <link rel="stylesheet" href="./css/estilos.css">
  <link rel="stylesheet" href="./css/lightbox.min.css">
</head>

<body>
    <?php include("bienvenida.php"); ?>

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
        <a href="./obras.php" class="activo">Obras</a>
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

<main class="contenedor-catalogo" style="padding: 80px 10vw 20px 10vw; background-color: var(--color-fondo);">
    
    <h1 style="font-family: var(--fuente-titulo); font-size: 3rem; color: var(--color-oro); letter-spacing: 4px; margin-top: 0; margin-bottom: 40px; text-transform: uppercase; text-align: center;">OBRAS DESTACADAS</h1>

    <div class="grilla-museografica">
      
      <!-- ==================== 1. ANDRÉ BRETON ==================== -->
      <article class="ficha-obra">
        <a href="./img/manifiesto.jpg" data-lightbox="galeria-obras" data-title="André Breton – Primer Manifiesto del Surrealismo (1924)">
          <div class="marco-imagen">
            <img src="./img/manifiesto.jpg" alt="Primer Manifiesto del Surrealismo">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">André Breton – Manifiesto del Surrealismo (1924)</h2>
          <p class="resena-obra">El documento sagrado y fundacional que estableció las bases teóricas del movimiento. Esta pieza corresponde a la célebre edición en español de la Editorial Argonauta, traducida por Aldo Pellegrini e ilustrada en portada con el enigmático metrónomo con ojo de Man Ray.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/nadja.jpg" data-lightbox="galeria-obras" data-title="André Breton – Novela Nadja (1928)">
          <div class="marco-imagen">
            <img src="./img/nadja.jpg" alt="Novela Nadja">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">André Breton – Nadja (1928)</h2>
          <p class="resena-obra">La obra cumbre de la narrativa surrealista, planteada como una crónica de la relación del autor con una joven libre y de facultades psíquicas alteradas en París. Su portada original juega con elementos icónicos de la fotografía y el diseño editorial del grupo de vanguardia.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/poema-objeto.jpg" data-lightbox="galeria-obras" data-title="André Breton – Poema-Objeto (1937)">
          <div class="marco-imagen">
            <img src="./img/poema-objeto.jpg" alt="Poema-Objeto - André Breton">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">André Breton – Poema-Objeto (1937)</h2>
          <p class="resena-obra">Una pieza tridimensional exclusiva que materializa las teorías de Breton sobre el ensamblaje fortuito. Reúne dos ojos de cristal y una mosca artificial dentro de una pequeña caja de madera, rompiendo con la lógica de los objetos para hablarle directamente al subconsciente.</p>
        </div>
      </article>

      <!-- ==================== 2. JOAN MIRÓ ==================== -->
      <article class="ficha-obra">
        <a href="./img/interior holandes.jpg" data-lightbox="galeria-obras" data-title="Joan Miró – Interior holandés I (1928)">
          <div class="marco-imagen">
            <img src="./img/interior holandes.jpg" alt="Interior holandés I">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">Joan Miró – Interior holandés I (1928)</h2>
          <p class="resena-obra">Reinterpretación surrealista de una pintura clásica del siglo XVII. Miró deconstruye la escena original para transformarla en un universo lúdico de formas biomórficas flotantes y colores intensos que rompen con la realidad académica.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/tierra labrada.jpg" data-lightbox="galeria-obras" data-title="Joan Miró – La tierra labrada (1923-24)">
          <div class="marco-imagen">
            <img src="./img/tierra labrada.jpg" alt="La tierra labrada">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">Joan Miró – La tierra labrada (1923-24)</h2>
          <p class="resena-obra">Pieza de transición fundamental donde el paisaje rural catalán es alterado por el subconsciente. El cuadro introduce la icónica simbología anatómica de Miró, plagando el campo de ojos, orejas y criaturas fantásticas.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/carnaval de alerquin.jpg" data-lightbox="galeria-obras" data-title="Joan Miró – El carnaval de Arlequín (1924–25)">
          <div class="marco-imagen">
            <img src="./img/carnaval de alerquin.jpg" alt="El carnaval de Arlequín">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">Joan Miró – El carnaval de Arlequín (1924–25)</h2>
          <p class="resena-obra">Una pintura que despliega un universo de figuras flotantes, colores intensos y formas orgánicas. Miró crea un espacio poético donde lo lúdico y lo onírico se entrelazan, evocando la libertad de la imaginación. La obra es considerada una de las más representativas del surrealismo abstracto.</p>
        </div>
      </article>

      <!-- ==================== 3. RENÉ MAGRITTE ==================== -->
      <article class="ficha-obra">
        <a href="./img/la traicion de las imagenes.jpg" data-lightbox="galeria-obras" data-title="René Magritte – La traición de las imágenes (1929)">
          <div class="marco-imagen">
            <img src="./img/la traicion de las imagenes.jpg" alt="La traición de las imágenes">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">René Magritte – La traición de las imágenes (1929)</h2>
          <p class="resena-obra">La famosa pintura de la pipa acompañada por la frase “Ceci n’est pas une pipe” (“Esto no es una pipa”) cuestiona la relación entre objeto y representación. Magritte obliga al espectador a reflexionar sobre el lenguaje y la imagen, mostrando que la pintura no es el objeto en sí, sino su representación.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/el hijo del hombre.jpg" data-lightbox="galeria-obras" data-title="René Magritte – El hijo del hombre (1964)">
          <div class="marco-imagen">
            <img src="./img/el hijo del hombre.jpg" alt="El hijo del hombre">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">René Magritte – El hijo del hombre (1964)</h2>
          <p class="resena-obra">Una de las pinturas más reconocibles del surrealismo, donde un hombre con sombrero y traje aparece con el rostro oculto por una manzana verde suspendida frente a él. La obra condensa la esencia del surrealismo: lo cotidiano transformado en enigma, lo visible que oculta lo invisible.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/los amantes.jpg" data-lightbox="galeria-obras" data-title="René Magritte – Los amantes (1928)">
          <div class="marco-imagen">
            <img src="./img/los amantes.jpg" alt="Los amantes">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">René Magritte – Los amantes (1928)</h2>
          <p class="resena-obra">Esta icónica y perturbadora obra maestra del surrealismo belga aborda el aislamiento y la frustración del amor a través de dos figuras que se besan con los rostros cubiertos por telas blancas. Magritte juega con la dicotomía de lo visible y lo oculto, transformando un acto de intimidad absoluta en una metáfora del distanciamiento.</p>
        </div>
      </article>

      <!-- ==================== 4. SALVADOR DALÍ ==================== -->
      <article class="ficha-obra">
        <a href="./img/la persistencia de la memoria.jpg" data-lightbox="galeria-obras" data-title="Salvador Dalí – La persistencia de la memoria (1931)">
          <div class="marco-imagen">
            <img src="./img/la persistencia de la memoria.jpg" alt="La persistencia de la memoria">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">Salvador Dalí – La persistencia de la memoria (1931)</h2>
          <p class="resena-obra">Quizás la obra más célebre del surrealismo, exhibida en el MoMA de Nueva York. Los relojes blandos que se derriten en un paisaje desértico representan la fragilidad del tiempo y la relatividad de la percepción. Dalí logra condensar en esta pintura su método paranoico-crítico, donde lo real se transforma en lo imposible.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/el gran masturbador.jpg" data-lightbox="galeria-obras" data-title="Salvador Dalí – El gran masturbador (1929)">
          <div class="marco-imagen">
            <img src="./img/el gran masturbador.jpg" alt="El gran masturbador">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">Salvador Dalí – El gran masturbador (1929)</h2>
          <p class="resena-obra">Pintada en el año crucial de su integración al grupo surrealista, esta obra es un mapa descarnado de las fobias y obsesiones del artista. Un gran rostro distorsionado y de aspecto pétreo sirve de escenario para elementos simbólicos recurrentes: saltamontes, hormigas, anzuelos y figuras eróticas.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/bandeja de objetos.jpg" data-lightbox="galeria-obras" data-title="Salvador Dalí y col. – Bandeja de Objetos Surrealistas (1936)">
          <div class="marco-imagen">
            <img src="./img/bandeja de objetos.jpg" alt="Bandeja de Objetos Surrealistas">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">Salvador Dalí y col. – Bandeja de Objetos (1936)</h2>
          <p class="resena-obra">Presentada en la histórica Exposición de Objetos Surrealistas de París, esta bandeja reúne un ensamblaje de piezas cotidianas alteradas (como un zapato de tacón y moldes de yeso) que desafían su utilidad práctica para transformarse en proyecciones del deseo y del fetiche colectivo.</p>
        </div>
      </article>

      <!-- ==================== 5. MAX ERNST ==================== -->
      <article class="ficha-obra">
        <a href="./img/la virgen castigando.jpg" data-lightbox="galeria-obras" data-title="Max Ernst – La Virgen castigando al Niño Jesús ante tres testigos (1926)">
          <div class="marco-imagen">
            <img src="./img/la virgen castigando.jpg" alt="La Virgen castigando al Niño Jesús">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">Max Ernst – La Virgen castigando al Niño Jesús (1926)</h2>
          <p class="resena-obra">Una obra provocadora que combina irreverencia religiosa con experimentación técnica. Ernst utilizó el frottage y el grattage para crear texturas inesperadas, en línea con la idea surrealista de liberar la creatividad del control racional. Su carácter transgresor refleja la influencia del dadaísmo en los primeros surrealistas.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/europa despues de la lluvia.jpg" data-lightbox="galeria-obras" data-title="Max Ernst – Europa después de la lluvia II (1940–42)">
          <div class="marco-imagen">
            <img src="./img/europa despues de la lluvia.jpg" alt="Europa después de la lluvia II">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">Max Ernst – Europa después de la lluvia II (1940–42)</h2>
          <p class="resena-obra">Realizada durante el exilio del artista en Estados Unidos, esta obra refleja la devastación de la Segunda Guerra Mundial mediante la técnica de la decalcomanía, que genera texturas azarosas y paisajes fantásticos. El resultado es un escenario apocalíptico que simboliza tanto la destrucción bélica como la potencia creativa del inconsciente.</p>
        </div>
      </article>

      <article class="ficha-obra">
        <a href="./img/el elefante.jpg" data-lightbox="galeria-obras" data-title="Max Ernst – El elefante de Célebes (1921)">
          <div class="marco-imagen">
            <img src="./img/el elefante.jpg" alt="El elefante de Célebes">
            <div class="capa-zoom"><span>AMPLIAR OBRA 🔍</span></div>
          </div>
        </a>
        <div class="documentacion-obra">
          <h2 class="encabezado-obra">Max Ernst – El elefante de Célebes (1921)</h2>
          <p class="resena-obra">Considerada la primera gran obra maestra surrealista de Ernst, este imponente óleo combina la estética de un colosal artefacto mecánico con formas orgánicas. La pieza evoca la lógica del collage y del absurdo antes de la proclamación oficial del movimiento.</p>
        </div>
      </article>

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./js/lightbox.min.js"></script>

</body>
</html>