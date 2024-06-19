<?php 
//Inclusión de librerias
require($_SERVER["DOCUMENT_ROOT"]."/local/codes/config.php");

//Declaración de variables
$tabla = "subcategoria";
$id = $_POST['id'];
$nombre = htmlentities($_POST['nombre'], ENT_QUOTES, "UTF-8");
$nombre_en = htmlentities($_POST['nombre_en'], ENT_QUOTES, "UTF-8");
$est_esp = $_POST['est_esp'];
$est_en = $_POST['est_en'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$ruta = $_POST['ruta'];
$nom_fot = $_POST['nom_fot'];
   
                        //Funcion para insertar datos
                        $insert = $bd->insert($tabla,"'$id', '$nombre', '$nombre_en', '$est_esp', '$est_en', '$ciudad', '$estado', 
                                '$nom_fot', '$ruta'",
                                "id, nombre, nombre_en, est_esp, est_eng, id_ciu, id_estado, nom_foto, ruta");
                        //En caso de error se muestra
                            if(!$insert)
                            {
                                //Imprimir el resultado
                                echo "<div id='div_no_realizado'>No se realizo la inserccici&oacute;n de datos.</div>";
                                //Devolver a la pagina principal (Segundos)
                                recargar(2);
                            }
                            //En caso contrario se muestra la realización satisfactoria
                            else{
                                //Imprimir el resultado
                                echo "<div id='div_realizado'>Se creo correctamente la subcategoria <b>".mayusculas($nombre)."</b></div>";
                                //Devolver a la pagina principal (Segundos)
                                recargar(2);
                            }
?>

