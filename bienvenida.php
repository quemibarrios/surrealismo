<?php
// Validamos que el usuario venga de un login exitoso
if(isset($_GET['login']) && $_GET['login'] == 'exitoso'): ?>

    <div id="panel-bienvenida" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); z-index: 9999; display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <div style="background-color: var(--color-superficie); padding: 40px; border-radius: 15px; text-align: center; border: 2px solid var(--color-oro); max-width: 500px;">
            <h1 style="color: var(--color-oro); font-family: var(--fuente-titulo);">¡Hola, <?php echo $_SESSION['nombre']; ?>!</h1>
            <p style="color: var(--color-texto); margin-bottom: 30px;">Bienvenid@ al contenido exclusivo de UMA.</p>
            
            <!-- Botón que activa el panel y lo oculta -->
            <button onclick="document.getElementById('panel-bienvenida').style.display='none'" 
                    style="padding: 15px 30px; background-color: var(--color-oro); color: #000; border: none; cursor: pointer; font-weight: bold; border-radius: 5px; font-family: var(--fuente-titulo); text-transform: uppercase;">
                Acceder al contenido
            </button>
        </div>
    </div>

<?php endif; ?>