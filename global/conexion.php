<?php
/*Aqui realizamos la conexion con la base de datos */
$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo= new PDO($servidor,USUARIO,PASSWORD,
            array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
        );
}catch(PDOException $e){
    /*Y si la conexion falla sale un mensaje de error */
    echo"<script>alert('Error...')</script>";
}
?>