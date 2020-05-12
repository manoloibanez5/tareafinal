<?php
include "global/config.php";
include "global/conexion.php";
include "carrito.php";
include "templates/cabecera.php"
?>
<?php
/*Aqui inserta los datos de la compra en la tabla ventas */
if($_POST){
    $total=0;
    $SID=session_id();
    $correo=$_POST['email'];
    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $total=$total+($producto['precio']*$producto['cantidad']);
    }
    $sentencia=$pdo->prepare("INSERT INTO `ventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`)
        VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente');");
    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Correo",$correo);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();
    echo "<br><br><h1>Todo correcto el precio Final es:</h1><h3>". $total ."€</h3>";
}
?>
<?php
include"templates/pie.php";
?>