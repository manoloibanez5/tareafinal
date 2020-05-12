<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<!--Este fichero nos muestra las opciones del administrador-->
<br>
<br>
<div>Hola admin</div>
<a href="formularioañadir.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Añadir un nuevo Producto</a>
<a href="formularioborrar.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Borrar un Producto</a>
<?php
include"templates/pie.php";
?>