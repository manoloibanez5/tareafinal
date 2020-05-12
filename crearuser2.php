<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<?php
	try{
		/*Esto es para insertar usuarios en la base de datos que por defecto seran comprador */
        $perfil="comprador";
		$sentencia=$pdo->prepare("INSERT INTO usuarios (nombre,password,direccion,perfil) VALUES (:login, :password, :direccion, :perfil)");
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $login=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $direccion=htmlentities(addslashes($_POST["direccion"]));
		$sentencia->bindValue(":login", $login);
        $sentencia->bindValue(":password", $password);
        $sentencia->bindValue(":direccion", $direccion);
        $sentencia->bindValue(":perfil", $perfil);
		$sentencia->execute();
		$numero_registro=$sentencia->rowCount();
		if ($numero_registro!=0) {
			session_start();
			$_SESSION["usuario"]=$_POST["login"];
			header("location:index.php");
		}else{
			header("location:index.php");
		}

	}catch(Exception $e){
		die("<br><br>Error: " . $e->getMessage());
	}
?>
<?php
include"templates/pie.php";
?>