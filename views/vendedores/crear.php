<main class="contenedor seccion">
    <h1>Registrar Vendedor(a)</h1>
    <a href="/admin" class="btn btn-azul">Volver</a>
    <br>
    <br>

    <?php foreach($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/vendedores/crear">
        <?php include __DIR__ . '/formulario.php'; ?>
        
        <div class="alinear-derecha">
            <input type="submit" value="Registrar Vendedor" class="btn btn-rosa">
        </div>
    </form>
</main>