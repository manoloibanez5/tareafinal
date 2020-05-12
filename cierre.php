<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/*Esto sirve para Realizar la accion de cerrar sesion */
session_start();
session_destroy();
header("location:index.php");
?>
</body>
</html>