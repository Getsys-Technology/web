<?php 
//Inclusi�n de librerias
require($_SERVER["DOCUMENT_ROOT"]."/local/codes/config.php");

//Declaraci�n de variables
$tabla = "categoria";
$id = $_POST['id'];
$nombre = htmlentities($_POST['nombre'], ENT_QUOTES, "UTF-8");
$nombre_en = htmlentities($_POST['nombre_en'], ENT_QUOTES, "UTF-8");
if(empty($nombre_en))
    $nombre_en = 'NULL';
$est_esp = $_POST['est_esp'];
$est_en = $_POST['est_eng'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$ruta_cam = $_POST['ruta'];
$ruta = $_POST['ruta_link'];
$num_ord = $_POST['num_ord'];
$nom_fot = $_POST['nom_fot'];
   
                        //Funcion para insertar datos
                        $update = $bd->update($tabla,"id = '$id', nombre = '$nombre', nombre_en = '$nombre_en', est_esp = '$est_esp', 
                                est_eng = '$est_en', id_ciu = '$ciudad', id_estado = '$estado', nom_foto = '$nom_fot', ruta = '$ruta', 
                                ruta_cam = '$ruta_cam', num_ord = '$num_ord'",
                                "id = ".$id);
                        //En caso de error se muestra
                            if(!$update)
                            {
                                //Imprimir el resultado
                                echo "<div id='div_no_realizado'>No se realizo la edici&oacute;n de datos.</div>";
                                //Devolver a la pagina principal (Segundos)
                                recargar(1);
                            }
                            //En caso contrario se muestra la realizaci�n satisfactoria
                            else{
                                //Imprimir el resultado
                                echo "<div id='div_realizado'>Se actualizo <b>".$nombre."</b> correctamente.</div>";
                                //Devolver a la pagina principal (Segundos)
                                recargar(1);
                            }
?>
