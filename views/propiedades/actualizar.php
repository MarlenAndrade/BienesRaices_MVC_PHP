<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <a href="/admin" class="btn btn-azul">Volver</a>
    <br>
    <br>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>

        <div class="alinear-derecha">
            <input type="submit" value="Actualizar Propiedad" class="btn btn-rosa">
        </div>
    </form>
</main>