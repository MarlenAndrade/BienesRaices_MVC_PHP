<main class="contenedor seccion contenido-centrado">

    <div class="center">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?> 
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario" action="/login">
            <div class="txt_field">
                <input type="email" name="email" id="email" required>
                <span></span>
                <label for="email">E-mail</label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" id="password" required>
                <span></span>
                <label for="password">Password</label>
            </div>

            <!-- <div class="pass">¿Olvidaste tu contraseña?</div> -->
            <input type="submit" value="Iniciar Sesión" class="btn btn-login">
            <!-- <div class="sigup_link">
                ¿No estás registrado? <a href="/registro">Registrarse</a>
            </div> -->
        </form>
    </div>

</main>