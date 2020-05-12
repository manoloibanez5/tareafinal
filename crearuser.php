<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<br>
<!--Esto es el formulario de creacion de usuario-->
    <form action="crearuser2.php" method="post">
        Introduzca el usuario:
        <input type="text" name="login">
        <br>
        Introduzca la contraseña:
        <input type="password" name="password">
        <br>
        Introduzca la direccion de envio:
        <input type="text" name="direccion">
        <br>
        <input type="submit" name="enviar" value="Enviar datos">
    </form>
<?php
include"templates/pie.php";
?>