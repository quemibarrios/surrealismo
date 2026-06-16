<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>UMA | El Manifiesto Surrealista: Teoría, Historia y Revolución</title>
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
          <a href="./surrealismo.php" class="activo">Surrealismo</a>
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

  <!-- SECCIÓN 1: EL SURREALISMO Y SU FILOSOFÍA -->
  <section style="background: linear-gradient(180deg, var(--color-fondo-tarjeta) 0%, var(--color-fondo) 100%); padding: 80px 10vw 20px 10vw; text-align: left;">
    <h1 style="font-family: var(--fuente-titulo); font-size: 3rem; color: var(--color-oro); letter-spacing: 4px; margin-bottom: 40px; text-transform: uppercase; text-align: center;">SURREALISMO</h1>
    
    <div style="font-family: var(--fuente-cuerpo); font-size: 1.05rem; color: var(--color-texto); max-width: 850px; margin: -10px auto 0 auto; line-height: 1.8; font-weight: 300; text-align: justify; display: flex; flex-direction: column; gap: 20px;">

      <p>
        El surrealismo fue un importante movimiento artístico surgido en Francia a finales de la década de 1910, que se proponía explorar de forma artística la mente humana y la dinámica de los sueños. Surgió a partir de la herencia del dadá y del impulso del escritor André Bretón (1896-1966), considerado su fundador y principal exponente. Tuvo una amplia expansión y presencia en todas las artes.
      </p>
      <p>
        El surrealismo se nutrió de muy diversas fuentes estéticas y filosóficas: desde la transformadora y audaz poesía de Arthur Rimbaud (1854-1891), Alfred Jarry (1873-1907) y Lautréamont (Isidore Ducasse, 1846-1869), hasta la pintura de El Bosco (Jheronimus van Aken o Hieronymus Bosch, 1450-1516), pasando por las exploraciones del dadá y la influencia de las recientes teorías psicoanalíticas de Sigmund Freud.
      </p>
      <p>
        Tuvo su apogeo antes de la Segunda Guerra Mundial. Después de la guerra, la mayoría de los surrealistas europeos se trasladaron a Estados Unidos y a América Latina, e introdujeron estas ideas en sus nuevos contextos.
      </p>

      <h2 style="font-family: var(--fuente-titulo); font-size: 1.5rem; color: var(--color-oro); margin-top: 25px; margin-bottom: 5px; letter-spacing: 1px; text-transform: uppercase;">¿Qué significa surrealismo?</h2>
      <p>
        El término surrealismo proviene del francés <em>surréalisme</em> y se le atribuye al escritor Guillaume Apollinaire, quien en 1917 asignó el subtítulo “drama surrealista” a su obra dramática <em>Las tetas de Tiresias</em>.
      </p>
      <p>
        Surrealismo significa literalmente “por encima” (sur-) del realismo (réalisme). Los surrealistas intentaban crear un arte que fuera más allá de las perspectivas limitantes del realismo. Fue definido por primera vez en el <em>Manifiesto surrealista</em> (1924) como:
      </p>

      <div style="background: rgba(255, 255, 255, 0.02); border-left: 3px solid var(--color-oro); padding: 25px 30px; font-style: italic; margin: 5px 0 0 0; color: #ccc;">
        “Automatismo psíquico puro, por cuyo moyen se intenta expresar, ya sea verbalmente, por escrito o de cualquier otro modo, el funcionamiento real del pensamiento. Dictado del pensamiento, en ausencia de todo control ejercido por la razón, ajeno a toda preocupación estética o moral”.
        <span style="display: block; margin-top: 12px; color: var(--color-oro); font-style: normal; font-size: 0.9rem; font-weight: 400; font-family: var(--fuente-cuerpo);">— André Bretón, Primer manifiesto del surrealismo (1924).</span>
      </div>
    </div>
  </section>

  <!-- SECCIÓN 2: CARACTERÍSTICAS DEL SURREALISMO -->
  <section style="padding: 60px 10vw; background-color: var(--color-fondo);">
    <div style="max-width: 1100px; margin: 0 auto; text-align: center;">
      <!-- SUBTÍTULO 1 COHERENTE: Mismo tamaño (2rem) y tipografía Cinzel -->
      <h2 style="font-family: var(--fuente-titulo); font-size: 2rem; color: var(--color-oro); letter-spacing: 2px; display: inline-block; margin-bottom: 20px; text-transform: uppercase;">CARACTERÍSTICAS DEL SURREALISMO</h2>
      <p style="font-family: var(--fuente-cuerpo); font-size: 0.95rem; color: var(--color-texto); max-width: 750px; margin: 0 auto 40px auto; font-weight: 300; line-height: 1.6;">
        El Manifiesto surrealista de 1924 de André Bretón fue el texto fundacional del surrealismo y su primera declaración de principios, que pueden sintetizarse así:
      </p>
      
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; text-align: left;">
        
        <article class="ficha-obra" style="margin: 0;">
          <div class="documentacion-obra" style="border-top: 1px solid rgba(197, 168, 92, 0.15); padding: 25px;">
            <!-- TITULITO INTERNO COHERENTE: Fuente de cuerpo destacado -->
            <header class="encabezado-obra" style="color: var(--color-oro); font-family: var(--fuente-cuerpo); font-weight: 600; font-size: 1.15rem; margin-bottom: 10px;">Exploraba el inconsciente</header>
            <p class="resena-obra" style="font-family: var(--fuente-cuerpo); text-align: justify; font-size: 0.88rem; line-height: 1.7; font-weight: 300;">
              Buscaba liberar la mente consciente accediendo al inconsciente freudiano. Los artists usaban el automatismo (crear sin control racional) y recreaban mundos oníricos con elements absurdos y desproporcionados imposibles de comprender lógicamente.
            </p>
          </div>
        </article>

        <article class="ficha-obra" style="margin: 0;">
          <div class="documentacion-obra" style="border-top: 1px solid rgba(197, 168, 92, 0.15); padding: 25px;">
            <header class="encabezado-obra" style="color: var(--color-oro); font-family: var(--fuente-cuerpo); font-weight: 600; font-size: 1.15rem; margin-bottom: 10px;">Aspiraba a la libertad total</header>
            <p class="resena-obra" style="font-family: var(--fuente-cuerpo); text-align: justify; font-size: 0.88rem; line-height: 1.7; font-weight: 300;">
              Se proponía romper las reglas de la lógica racional para dar paso a la imaginación pura. Al explorar el sueño, el deseo y el miedo, pretendían quebrar las normas sociales y estéticas tradicionales para liberar al ser humano.
            </p>
          </div>
        </article>

        <article class="ficha-obra" style="margin: 0;">
          <div class="documentacion-obra" style="border-top: 1px solid rgba(197, 168, 92, 0.15); padding: 25px;">
            <header class="encabezado-obra" style="color: var(--color-oro); font-family: var(--fuente-cuerpo); font-weight: 600; font-size: 1.15rem; margin-bottom: 10px;">Creación colectiva y espontánea</header>
            <p class="resena-obra" style="font-family: var(--fuente-cuerpo); text-align: justify; font-size: 0.88rem; line-height: 1.7; font-weight: 300;">
              Heredó del dadaísmo de Tristan Tzara la idea de que el arte debe ser grupal, lúdico y accidental. Eran comunes los juegos creativos colectivos donde múltiples autores componían una sola pieza sin una dirección preconcebida.
            </p>
          </div>
        </article>

        <article class="ficha-obra" style="margin: 0;">
          <div class="documentacion-obra" style="border-top: 1px solid rgba(197, 168, 92, 0.15); padding: 25px;">
            <header class="encabezado-obra" style="color: var(--color-oro); font-family: var(--fuente-cuerpo); font-weight: 600; font-size: 1.15rem; margin-bottom: 10px;">Innovación técnica constante</header>
            <p class="resena-obra" style="font-family: var(--fuente-cuerpo); text-align: justify; font-size: 0.88rem; line-height: 1.7; font-weight: 300;">
              Para evitar el control de la razón, el movimiento inventó técnicas revolucionarias en literatura, pintura y escultura. Se destacaron los cadáveres exquisitos, las cajas surrealistas, la escritura automática y la decalcomanía.
            </p>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- SECCIÓN 3: REPRESENTANTES Y AUTORES -->
  <section style="background-color: rgba(197, 168, 92, 0.02); padding: 60px 10vw; border-top: 1px solid rgba(197, 168, 92, 0.05); border-bottom: 1px solid rgba(197, 168, 92, 0.05);">
    <div style="max-width: 1100px; margin: 0 auto;">
      <!-- SUBTÍTULO 2 COHERENTE: Molde original (2rem, Cinzel, Centrado) -->
      <h2 style="font-family: var(--fuente-titulo); font-size: 2rem; color: var(--color-oro); text-align: center; margin-bottom: 20px; letter-spacing: 2px; text-transform: uppercase;">REPRESENTANTES Y AUTORES</h2>
      
      <p style="font-family: var(--fuente-cuerpo); font-size: 0.95rem; color: var(--color-texto); max-width: 750px; margin: 0 auto 40px auto; font-weight: 300; line-height: 1.6; text-align: center;">
        El surrealismo contó con la participación de destacados escritores, pintores y cineastas que plasmaron los principios del movimiento en diversas disciplinas artísticas:
      </p>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; font-family: var(--fuente-cuerpo); font-weight: 300; font-size: 0.95rem; line-height: 1.7; text-align: left;">
        
        <div style="background: rgba(255,255,255,0.01); padding: 25px; border: 1px solid rgba(255,255,255,0.03);">
          <!-- TITULITO INTERNO COHERENTE: Ajustado a fuente de cuerpo semibold oro -->
          <strong style="color: var(--color-oro); font-family: var(--fuente-cuerpo); font-weight: 600; display: block; margin-bottom: 12px; font-size: 1.15rem; letter-spacing: 0.5px;">Surrealismo Literario</strong>
          <span style="color: #fff; font-weight: 400;">Guillaume Apollinaire</span> (1880-1918)<br>
          <span style="color: #fff; font-weight: 400;">André Breton</span> (1896-1966)<br>
          <span style="color: #fff; font-weight: 400;">Antonin Artaud</span> (1896-1948)<br>
          <span style="color: #fff; font-weight: 400;">Federico García Lorca</span> (1898-1936)<br>
          <span style="color: #fff; font-weight: 400;">Jacques Prévert</span> (1900-1977)<br>
          <span style="color: #fff; font-weight: 400;">Octavio Paz</span> (1914-1998)
        </div>

        <div style="background: rgba(255,255,255,0.01); padding: 25px; border: 1px solid rgba(255,255,255,0.03);">
          <!-- TITULITO INTERNO COHERENTE: Ajustado a fuente de cuerpo semibold oro -->
          <strong style="color: var(--color-oro); font-family: var(--fuente-cuerpo); font-weight: 600; display: block; margin-bottom: 12px; font-size: 1.15rem; letter-spacing: 0.5px;">Artes Plásticas</strong>
          <span style="color: #fff; font-weight: 400;">Marcel Duchamp</span> (1887-1968)<br>
          <span style="color: #fff; font-weight: 400;">Joan Miró</span> (1893-1983)<br>
          <span style="color: #fff; font-weight: 400;">René Magritte</span> (1898-1967)<br>
          <span style="color: #fff; font-weight: 400;">Salvador Dalí</span> (1904-1989)<br>
          <span style="color: #fff; font-weight: 400;">Frida Kahlo</span> (1907-1954)<br>
          <span style="color: #fff; font-weight: 400;">Remedios Varo</span> (1908-1963)
        </div>

        <div style="background: rgba(255,255,255,0.01); padding: 25px; border: 1px solid rgba(255,255,255,0.03);">
          <!-- TITULITO INTERNO COHERENTE: Ajustado a fuente de cuerpo semibold oro -->
          <strong style="color: var(--color-oro); font-family: var(--fuente-cuerpo); font-weight: 600; display: block; margin-bottom: 12px; font-size: 1.15rem; letter-spacing: 0.5px;">Surrealismo en el Cine</strong>
          <span style="color: #fff; font-weight: 400;">Jean Cocteau</span> (1889-1963)<br>
          <span style="color: #fff; font-weight: 400;">Luis Buñuel</span> (1900-1983)
        </div>

      </div>
    </div>
  </section>

  <!-- SECCIÓN 4: TÉCNICAS DEL SURREALISMO -->
  <section style="padding: 60px 10vw 80px 10vw; text-align: center; background-color: var(--color-fondo);">
    <div style="max-width: 850px; margin: 0 auto;">
      <!-- SUBTÍTULO 3 COHERENTE: Mismo tamaño (2rem), Cinzel, Centrado y Oro -->
      <h2 style="font-family: var(--fuente-titulo); font-size: 2rem; color: var(--color-oro); letter-spacing: 2px; margin-bottom: 30px; text-transform: uppercase;">TÉCNICAS DEL SURREALISMO</h2>
      
      <div style="max-width: 600px; margin: 0 auto 40px auto; background: rgba(255,255,255,0.01); padding: 15px; border: 1px solid rgba(197, 168, 92, 0.1);">
        <img src="./img/bandeja de objetos.jpg" alt="Salvador Dalí - Bandeja de objetos" style="width: 100%; height: auto; display: block; margin-bottom: 10px;">
        <p style="font-family: var(--fuente-cuerpo); font-size: 0.85rem; color: #aaa; text-align: left; margin: 0; line-height: 1.4;">
          El surrealismo desarrolló técnicas artísticas a partir del juego y la experimentación. <br>
          <span style="color: var(--color-oro); font-weight: 400;">Salvador Dalí. Bandeja de objetos, 1936.</span>
        </p>
      </div>

      <div style="font-family: var(--fuente-cuerpo); font-size: 1rem; color: var(--color-texto); line-height: 1.8; font-weight: 300; text-align: justify; display: flex; flex-direction: column; gap: 25px;">
        <p>
          <strong style="color: var(--color-oro); font-weight: 500;">La caja surrealista:</strong> Consistía en un contenedor que agrupaba objetos disímiles, absurdos o perturbadores para evocar el inconsciente. Estas piezas actuaban como catalizadores poéticos que forzaban al espectador a romper con los esquemas de la percepción diaria.
        </p>
        <p>
          <strong style="color: var(--color-oro); font-weight: 500;">La escritura y la pintura automáticas:</strong> Se cimentaban sobre la base de que la psique profunda posee una inmensa riqueza que brota al remover la censura racional. En las letras, el autor redactaba a máxima velocidad sin editar ni corregir su flujo de ideas; mientras que en la pintura se maniobraba sobre el soporte sin bocetos previos, capturando formas directamente espontáneas.
        </p>
        <p>
          <strong style="color: var(--color-oro); font-weight: 500;">El cadáver exquisito:</strong> Proceso de creación colectiva nacido a partir del juego de mesa "consecuencias". En él, los participantes sumaban versos o trazos sobre un papel plegado sin ver lo que los demás habían aportado, derivando en asombrosas combinaciones accidentales. Su denominación proviene de la frase inaugural surgida en dicho juego: <em>«El cadáver exquisito beberá el vino nuevo»</em>.
        </p>
        <p>
          <strong style="color: var(--color-oro); font-weight: 500;">La decalcomanía, frottage y grattage:</strong> La decalcomanía implicaba verter pintura densa en una superficie, presionarla con otro material rugoso y retirarlo en húmedo para generar manchas aleatorias interpretadas de forma libre. Esta práctica abrió paso a métodos afines como el frottage (frotar lápiz sobre relieves) o el grattage (raspar óleos directos del lienzo),iniendo que la casualidad física guiara el ojo artístico.
        </p>
      </div>
    </div>
  </section>
  
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