<?php 
//Inclusión de librerias
require($_SERVER["DOCUMENT_ROOT"]."/local/codes/config.php");

//Declaración de variables
$tabla = "cat_subcat";
$id_sub = $_POST['id_sub'];
$id_cat = $_POST['id_cat'];
$id_ciu = $_POST['id_ciu'];
$id_cat_ant = $_POST['id_cat_ant'];
   
                        //Funcion para insertar datos
                        $update = $bd->update($tabla,"id_cat = '$id_cat'","id_cat = ".$id_cat_ant." and id_subcat = ".$id_sub);
                        //En caso de error se muestra
                            if(!$update)
                            {
                                //Imprimir el resultado
                                realizado("no","edit?id_sub=".$id_sub."&id_cat=".$id_cat_ant."&id_ciu=".$id_ciu,"No se realizo la actualizaci&oacute;n de datos.");
                            }
                            //En caso contrario se muestra la realización satisfactoria
                            else{
                                //Imprimir el resultado
                                realizado("si","edit?id_sub=".$id_sub."&id_cat=".$id_cat."&id_ciu=".$id_ciu,"Se actualizo correctamente");
                            }
?>

