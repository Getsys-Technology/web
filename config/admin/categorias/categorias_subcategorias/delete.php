<?php 
//Inclusión de librerias
require($_SERVER["DOCUMENT_ROOT"]."/local/codes/config.php");

//Declaración de variables
$tabla = "cat_subcat";
$id_cat = $_GET['id_cat'];
$id_sub = $_GET['id_sub'];
$id_ciu = $_GET['id_ciu'];
   
//Funcion para eliminar
$delete = $bd->delete($tabla,"id_cat = '$id_cat' and id_subcat = '$id_sub'");

//En caso de error se muestra
if(!$delete)
    realizado("no","index?id_ciu=".$id_ciu,"Error al borrar");
else
    realizado("si","index?id_ciu=".$id_ciu,"Borrado correctamente");

?>

