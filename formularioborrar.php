<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<br>
<br>
<!--Esto es el formulario para borrar productos de la tabla productos-->
<h1>Borrar un producto:</h1>
<div class="container-fluid">
        <form action="borrar.php" method="post">
        Introduzca el id de Producto:
        <input type="text" name="id">
        <br>
        <input type="submit" name="enviar" value="Enviar datos">
      </form>
</div>
<?php
include"templates/pie.php";
?>