<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<?php
/*Esto sirve para que cuando nos registramos como administrador podamos borrar productos de nuestra tienda */
    try {
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$borrar = $pdo->prepare("Delete From productos Where id=:id");
		$borrar->bindParam(':id', $id);
		$id = $_POST["id"];
		$borrar->execute();
		header("location:administrador.php");
		}
	    catch(PDOException $e)
		{
			echo "<br><br>Error: " . $e->getMessage();
        }
?>
<?php
include"templates/pie.php";
?>