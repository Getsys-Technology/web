<?php 
//Inclusión de librerias
require($_SERVER["DOCUMENT_ROOT"]."/local/codes/config.php");

//Declaración de variables
$tabla = "subcat_clie";
$id_sub = $_GET['id_sub'];
$id_ciu = $_GET['id_ciu'];

$datos = $bd->select_items_2("id","cliente","id_ciu = ".$id_ciu." and id_estado = 1 order by nombre asc");
        
foreach ($datos as $var){
    
    if($_GET[$var] == true){
        
        $count = $bd->select_count("select count(*) from subcat_clie where id_cli = ".$var." and id_sub = ".$id_sub);
        
        if($count == 0){
        //Funcion para insertar datos
        $insert = $bd->insert($tabla,"'$id_sub', '$_GET[$var]'","id_sub, id_cli");
    
                        //En caso de error se muestra
                            if(!$insert)
                            {
                                //Devolver a la pagina principal (Segundos)
                                realizado("no","sub_cli?id=".$id_sub."&id_ciu=".$id_ciu,"No se actualizo correctamente.");
                            }
                            //En caso contrario se muestra la realización satisfactoria
                            else{
                                //Devolver a la pagina principal (Segundos)
                                realizado("si","sub_cli?id=".$id_sub."&id_ciu=".$id_ciu,"Se inserto correctamente");
                            }     
        }
        else
            realizado("si","sub_cli?id=".$id_sub."&id_ciu=".$id_ciu,"Se actualizo correctamente");
            
    }
    else{        
        $delete = $bd->delete($tabla,"id_sub = '$id_sub' and id_cli = '$var'");
    
                        if(!$delete)
                            {
                                //Devolver a la pagina principal (Segundos)
                                realizado("no","sub_cli?id=".$id_sub."&id_ciu=".$id_ciu,"No se elimino la relación ya que no existia o hay algun problema relacionado.");
                            }
                            //En caso contrario se muestra la realización satisfactoria
                            else{
                                //Devolver a la pagina principal (Segundos)
                                realizado("si","sub_cli?id=".$id_sub."&id_ciu=".$id_ciu,"Se elimino correctamente la relación");
                            }
    }
        
}
?>

