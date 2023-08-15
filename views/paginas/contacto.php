<main class="contenedor seccion">
    <h1>Contacto</h1>

    <?php if($mensaje){ ?>
            <p class='alerta exito'> <?php echo $mensaje; ?> </p>;
        <?php } ?>

    <div class="img-contacto">
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Texto Entrada Blog">
        </picture>
    </div>

    <h2>Llena el formulario de Contacto</h2>
    <form class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre:</label>
            <input type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
        </fieldset>
        
        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="opciones">Vende o Compra:</label>
            <select id="opciones" name="contacto[tipo]" required>
                <option value="Seleccione" disabled selected>--Seleccione--</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto:</label>
            <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto" name="contacto[precio]" required>
        </fieldset>

        <fieldset>
            <legend>Forma de Contacto</legend>

            <p>¿Cómo deseas ser contactado?</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input name="contacto[contacto]" type="radio" value="telefono" id="contactar-telefono" required>

                <label for="contactar-email">E-mail<E-mail></E-mail></label>
                <input name="contacto[contacto]" type="radio" value="email" id="contactar-email" required>
            </div>

            <div id="contacto"></div>
        </fieldset>

        <div class="alinear-derecha">
            <input type="submit" value="Enviar" class="btn-rosa">
        </div>
    </form>
</main>