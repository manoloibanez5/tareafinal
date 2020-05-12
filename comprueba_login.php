<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<?php
	/*Esto sirve para comprobar que el usuario esta o no en la base de datos registrado */
	try{
        $sentencia=$pdo->prepare("SELECT * FROM usuarios WHERE nombre= :login AND password= :password");
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$login=htmlentities(addslashes($_POST["login"]));
		$password=htmlentities(addslashes($_POST["password"]));
		$sentencia->bindValue(":login", $login);
		$sentencia->bindValue(":password", $password);
		$sentencia->execute();
		$numero_registro=$sentencia->rowCount();
		/*Aqui comprobamos si el usuario es el administrador"manolo" o no */
		if ($_POST['login']!='manolo') {
			if($numero_registro!=0){
			session_start();
			$_SESSION["usuario"]=$_POST["login"];
			header("location:index.php");
			}else{
				header("location:iniciarsesion.php");
			}
		}else{
			session_start();
			$_SESSION["administrador"]=$_POST["login"];
            header("location:administrador.php");
		}
	}catch(Exception $e){
		die("<br><br>Error: " . $e->getMessage());
	}
?>
<?php
include"templates/pie.php";
?>