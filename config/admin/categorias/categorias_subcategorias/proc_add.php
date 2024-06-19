<?php 
//Inclusión de librerias
require($_SERVER["DOCUMENT_ROOT"]."/local/codes/config.php");

//Declaración de variables
$tabla = "cat_subcat";
$id_cat = $_POST['id_cat'];
$id_subcat = $_POST['id_subcat'];
   
                        //Funcion para insertar datos
                        $insert = $bd->insert($tabla,"'$id_cat', '$id_subcat'","id_cat, id_subcat");
                        //En caso de error se muestra
                            if(!$insert)
                            {
                                //Imprimir el resultado
                                echo "<div id='div_no_realizado'>No se realizo la inserccici&oacute;n de datos.</div>";
                                //Devolver a la pagina principal (Segundos)
                                recargar(1);
                            }
                            //En caso contrario se muestra la realización satisfactoria
                            else{
                                //Imprimir el resultado
                                echo "<div id='div_realizado'>Se asocio correctamente la subcategoria</div>";
                                //Devolver a la pagina principal (Segundos)
                                recargar(2);
                            }
?>

