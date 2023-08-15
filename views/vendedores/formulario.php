<fieldset>
    <legend>Información General</legend>

    <label for="nombre">Nombre(s):</label>
    <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre(s) del Vendedor(a)" value="<?php echo s($vendedor->nombre); ?>">

    <label for="apellido">Apellidos:</label>
    <input type="text" id="apellido" name="vendedor[apellido]" placeholder="Apellidos del Vendedor(a)" value="<?php echo s($vendedor->apellido); ?>">
</fieldset>

<fieldset>
    <legend>Información Extra</legend>

    <label for="telefono">Teléfono:</label>
    <input type="number" id="telefono" name="vendedor[telefono]" placeholder="Teléfono del Vendedor(a)" value="<?php echo s($vendedor->telefono); ?>">

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="vendedor[email]" placeholder="E-mail del Vendedor(a)" value="<?php echo s($vendedor->email); ?>">
</fieldset>