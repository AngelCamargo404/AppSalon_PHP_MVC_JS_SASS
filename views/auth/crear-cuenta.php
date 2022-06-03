<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/crear-cuenta" class="formulario" method="POST">

    <div class="campo">
        <label for="nombre">Nombre</label>
        <input name="nombre" type="text" placeholder="Tu Nombre" id="nombre" for="nombre" value="<?php echo s($usuario->nombre); ?>">
    </div>

    <div class="campo">
        <label for="apellido">Apellido</label>
        <input name="apellido" type="text" placeholder="Tu Apellido" id="apellido" for="apellido" value="<?php echo s($usuario->apellido); ?>">
    </div>

    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input name="telefono" type="tel" placeholder="Tu Teléfono" id="telefono" for="telefono" value="<?php echo s($usuario->telefono); ?>">
    </div>

    <div class="campo">
        <label for="email">E-mail</label>
        <input name="email" type="email" placeholder="Tu E-mail" id="email" for="email" value="<?php echo s($usuario->email); ?>">
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input name="password" type="password" placeholder="Tu Password" id="password" for="password">
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Iniciar Sesión</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>