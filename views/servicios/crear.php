<h1 class="nombre-pagina">Crear producto</h1>
<p class="descripcion-pagina">Llena todo los campos para añadir productos</p>

<?php 
    include_once __DIR__ .'/../templates/barra.php';
    include_once __DIR__ .'/../templates/alertas.php';
?>

<form action="/servicios/crear" method="POST" class="formulario">

    <?php include_once __DIR__ .'/formulario.php'; ?>
    <input type="submit" class="boton" value="Guardar Producto">
</form>