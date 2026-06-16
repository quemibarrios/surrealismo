<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMA | Resultados de la Búsqueda</title>
    <link rel="stylesheet" href="./css/estilos.css"> 
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

                <!-- SALUDO INTEGRADO SI HAY SESIÓN -->
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

                <!-- LUPA DE BÚSQUEDA -->
                <div class="lupa-btn" onclick="toggleBuscador()" style="display: flex; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <div class="menu-icon" onclick="toggleMenu()">☰</div>
            </div>

            <!-- FORMULARIO DESPLEGABLE DE BÚSQUEDA -->
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

    <?php
        include('conector.php');
        $buscar = $_POST['buscar'];
    ?>

    <!-- SECCIÓN DE RESULTADOS -->
    <section style="padding-top: 80px; min-height: 70vh; width: 100%;">
        
        <div style="padding: 0 10vw;">
            <h1 class="recuadro" style="text-transform: uppercase; margin-bottom: 20px;">
                RESULTADOS PARA: <em>"<?php echo $buscar; ?>"</em>
            </h1>

            <?php
                $consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'");
                $nros = mysqli_num_rows($consulta);
            ?>

            <p style="font-family: var(--fuente-cuerpo); font-size: 1rem; color: var(--color-texto); font-weight: 300; margin-bottom: 40px;">
                Cantidad de Resultados: <strong style="color: var(--color-oro);"><?php echo $nros; ?></strong>
            </p>
        </div>

        <?php
        if($nros > 0) {
            while($resultados = mysqli_fetch_array($consulta)) {

                echo $resultados['bio']; 
            }
        } else {
        ?>
            <!-- CUANDO NO HAY RESULTADOS -->
            <div style="max-width: 600px; margin: 60px auto; padding: 40px; background-color: var(--color-fondo-tarjeta); border: 1px solid rgba(197, 168, 92, 0.15); border-radius: 8px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
                
                <div style="color: var(--color-oro); font-size: 2.5rem; margin-bottom: 20px; font-family: var(--fuente-titulo);">
                    ✕
                </div>
                
                <h3 style="font-family: var(--fuente-titulo); color: var(--color-texto); font-size: 1.3rem; letter-spacing: 1px; margin-bottom: 10px; text-transform: uppercase;">
                    Sin coincidencias
                </h3>
                
                <p style="font-family: var(--fuente-cuerpo); color: #888; font-size: 0.95rem; line-height: 1.6; font-weight: 300; margin-bottom: 25px;">
                    No encontramos artistas que coincidan con tu búsqueda.
                </p>
                
                <a href="./index.php" class="boton-vanguardia" style="display: inline-block; padding: 10px 25px; font-size: 0.85rem; letter-spacing: 1px;">
                    Volver al Inicio
                </a>
            </div>
        <?php
        }

        mysqli_free_result($consulta);
        mysqli_close($conexion);
        ?>
    </section>

    <!-- FOOTER -->
    <footer class="footer" style="background-color: var(--color-superficie); padding: 20px; text-align: center; border-top: 1px solid rgba(197, 168, 92, 0.1); margin-top: auto;">
        <p style="color: var(--color-muted); font-size: 0.85rem; margin: 0;">&copy; 2026 UMA - Vanguardia Surrealista. Todos los derechos reservados.</p>
    </footer>


    <!-- SCRIPTS DE NAVEGACIÓN -->
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