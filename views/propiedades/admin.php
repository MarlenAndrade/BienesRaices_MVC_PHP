<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>

    
    <?php if($resultado){
        $mensaje = mostrarNotificacion(intval($resultado));
        if($mensaje){ ?>
            <p class="alerta exito"><?php echo s($mensaje) ?></p>
        <?php } ?>
    <?php } ?>

    <script>
        function confirmacionPropiedad(){
            let respuestaP = confirm("¿Desea realmente borrar el registro?");
            if (respuestaP == true){
                return true;
            } else {
                return false;
            }
        }

        function confirmacionVendedor(){
            let respuestaV = confirm("Si el vendedor está ligado a una propiedad NO se podrá eliminar, ¿desea continuar?");
            if (respuestaV == true){
                return true;
            } else {
                return false;
            }
        }
    </script>
    
    <a href="/propiedades/crear" class="btn btn-rosa">Crear Propiedad</a>
    <a href="/vendedores/crear" class="btn btn-rosa">Registrar Vendedor(a)</a>

    <h2>Propiedades</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los resultados -->
            <?php foreach($propiedades as $propiedad): ?>
            <tr>
                <td> <?php echo $propiedad->id; ?></td>
                <td> <?php echo $propiedad->titulo; ?></td>
                <td>
                    <img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla">
                </td>
                <td> $<?php echo $propiedad->precio; ?></td>
                <td>
                    <form method="POST" class="w-100" action="/propiedades/eliminar">
                        <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit" value="Eliminar" class="btn-rojo-block" onclick="return confirmacionPropiedad()">
                    </form>

                    <a href="/propiedades/actualizar?id=<?php echo $propiedad->id; ?>" class="btn-verde-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Vendedores</h2>
    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody> <!-- Mostrar los resultados -->
            <?php foreach($vendedores as $vendedor): ?>
            <tr>
                <td> <?php echo $vendedor->id; ?></td>
                <td> <?php echo $vendedor->nombre . " " . $vendedor->apellido; ?></td>
                <td> <?php echo $vendedor->telefono; ?></td>
                <td> <?php echo $vendedor->email; ?></td>
                <td>
                    <form method="POST" class="w-100" action="/vendedores/eliminar">
                        <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
                        <input type="hidden" name="tipo" value="vendedor">
                        <input type="submit" value="Eliminar" class="btn-rojo-block" onclick="return confirmacionVendedor()">
                    </form>

                    <a href="/vendedores/actualizar?id=<?php echo $vendedor->id; ?>" class="btn-verde-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
