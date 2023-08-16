<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

    // - - - - - Verificar si no está en el LOGIN - - - - //
    $login = $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="../build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Icono menu hamburguesa">
                </div>

                <div class="derecha">
                    <img class="dark-mode-btn" src="/build/img/dark-mode.svg" alt="Icono modo oscuro">

                    <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/propiedades">Anuncios</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        <?php if(!$auth && $login != "/login"): ?>
                            <a href="/login">Iniciar Sesión</a>
                        <?php endif; ?>
                        <?php if($auth): ?>
                            <a href="/admin">Administrador</a>
                            <a href="/logout">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div><!--.derecha-->
            </div> <!--.barra -->

            <?php if($inicio){ ?>
            <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>
        </div>
    </header>
    
    <?php echo $contenido; ?>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="/nosotros">Nosotros</a>
                <a href="/propiedades">Anuncios</a>
                <a href="/blog">Blog</a>
                <a href="/contacto">Contacto</a>
            </nav>
        </div>

        <p class=" contenedor copyright">Todos los derechos reservados <?php echo date('Y') ?> &copy; Marlen Andrade</p>
    </footer>

    <script src="../build/js/bundle.min.js"></script>
</body>
</html>
