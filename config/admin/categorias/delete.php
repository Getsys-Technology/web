<?php 
//Inclusión de librerias
require($_SERVER["DOCUMENT_ROOT"]."/local/codes/config.php");

//Declaración de variables
$tabla = "categoria";
$id = $_GET['id'];
$id_ciu = $_GET['id_ciu'];
   
//Funcion para eliminar
$delete = $bd->delete($tabla,"id = '$id'");

//En caso de error se muestra
if(!$delete)
    realizado("no","index?id_ciu=".$id_ciu,"Error al borrar");
else
    realizado("si","index?id_ciu=".$id_ciu,"Borrado correctamente");

?>

