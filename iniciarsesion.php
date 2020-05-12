<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<!--Este es el formulario de inicio de sesion-->
<div>Introduce tus datos:</div>
<form action="comprueba_login.php" method="post">
	<table>
		<tr>
			<td class="izq">Login:</td>
			<td class="der"><input type="text" name="login"></td>
		</tr>
		<tr>
			<td class="izq">Contraseña:</td>
			<td class="der"><input type="password" name="password"></td>
		</tr>
		<tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td><td><a href="crearuser.php">Crear usuario</a></td></tr>
	</table>
</form>
<?php
include"templates/pie.php";
?>