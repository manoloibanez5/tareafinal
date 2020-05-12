<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<?php
/*Esto sirve para que cuando nos registramos como administrador podamos añadir productos a la tienda*/
    try {
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $añadir = $pdo->prepare("INSERT INTO Productos (nombre,precio,descripcion,imagen,tipo) 
          	VALUES (:nombre,:precio,:descripcion,:imagen,:tipo)");
	    $añadir->bindParam(':nombre', $nombre);
        $añadir->bindParam(':precio', $precio);
        $añadir->bindParam(':descripcion', $descripcion);
        $añadir->bindParam(':imagen', $imagen);
        $añadir->bindParam(':tipo', $tipo);
	    $nombre = $_POST["nombre"];
	    $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];
        $imagen = $_POST["imagen"];
        $tipo = $_POST["tipo"];
	    $añadir->execute();
	    header("location:administrador.php");
    }
    catch(PDOException $e){
		echo "Error: " . $e->getMessage();
    }
?>
<?php
include"templates/pie.php";
?>