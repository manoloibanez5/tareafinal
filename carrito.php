<?php
session_start();

$mensaje="";
if(isset($_POST["btnAccion"])){
    switch($_POST["btnAccion"]){
        case "Agregar":
            if (is_numeric(openssl_decrypt($_POST["id"],COD,KEY))) {
                $ID=openssl_decrypt($_POST["id"],COD,KEY);
                $mensaje.="Ok ID correcto ".$ID."</br>";
            }else {
                $mensaje.="ID incorrecto ".$ID."</br>";
            }
            if (is_string(openssl_decrypt($_POST["nombre"],COD,KEY))) {
                $nombre=openssl_decrypt($_POST["nombre"],COD,KEY);
                $mensaje.="Ok nombre ".$nombre."</br>";
            }else {
                $mensaje.="Nombre incorrecto "."</br>";
            break;
            }if (is_numeric(openssl_decrypt($_POST["precio"],COD,KEY))) {
                $precio=openssl_decrypt($_POST["precio"],COD,KEY);
                $mensaje.="Ok precio ".$precio."</br>";
            }else {
                $mensaje.="Precio incorrecto "."</br>";
            break;
            }if (is_numeric(openssl_decrypt($_POST["cantidad"],COD,KEY))) {
                $cantidad=openssl_decrypt($_POST["cantidad"],COD,KEY);
                $mensaje.="Ok cantidad ".$cantidad."</br>";
            }else {
                $mensaje.="Cantidad incorrecta "."</br>";
            break;
            }
            if(!isset($_SESSION["CARRITO"])){
                $producto=array(
                    "ID"=>$ID,
                    "nombre"=>$nombre,
                    "precio"=>$precio,
                    "cantidad"=>$cantidad
                );
                $_SESSION["CARRITO"][0]=$producto;
            }else {
                $numeroProductos=count($_SESSION["CARRITO"]);
                $producto=array(
                    "ID"=>$ID,
                    "nombre"=>$nombre,
                    "precio"=>$precio,
                    "cantidad"=>$cantidad
                );
                $_SESSION["CARRITO"][$numeroProductos]=$producto;
            }
            $mensaje=print_r($_SESSION,true);
        break;
        case "Eliminar":
            if (is_numeric(openssl_decrypt($_POST["id"],COD,KEY))) {
                $ID=openssl_decrypt($_POST["id"],COD,KEY);
                foreach($_SESSION["CARRITO"] as $indice=>$producto){
                    if ($producto["id"]==$ID) {
                       unset($_SESSION["CARRITO"][$indice]);
                       echo "<script>alert('Producto eliminado del carrito');</script>";
                    }
                }
            }else {
                $mensaje.="ID incorrecto ".$ID."</br>";
            }
        break;
    }
}

?>