<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<br>
<br>
<!--Esto es el formulario para añadir productos-->
<h1>Añade nuevos productos</h1>
<div class="container-fluid">
        <form action="añadir.php" method="post">
        Introduzca el Nombre del producto:
        <input type="text" name="nombre">
        <br>
        Introduzca el Precio del producto:
        <input type="text" name="precio">
        <br>
        Introduzca la Descripción del producto:
        <input type="text" name="descripcion">
        <br>
        Introduzca la Imagen del producto:
        <!--Aqui debes de poner el link de la imagen-->
        <input type="text" name="imagen">
        <br>
        Introduzca el Tipo de producto:
        <input type="text" name="tipo">
        <br>
        <input type="submit" name="enviar" value="Enviar datos">
      </form>
</div>
<?php
include"templates/pie.php";
?>