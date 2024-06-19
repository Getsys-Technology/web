<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");

    $id_ciu = $_POST['id_ciu'];
    $id_cat = $_POST['id_cat'];
    
    $nom_cat = $bd->select_item("nombre","categoria","id = ".$id_cat);
    
?>            
                <div id="div_tit">
                    SUBCATEGORIAS - <?php echo convertir_tildes(mayusculas($nom_cat)) ?>
                </div>
                <div>
                    <?php
                    $conn = $bd->conexion(); 
                    $i = 0;
                    
                    $sql = "select c_s.id_subcat, s.nombre
                            FROM cat_subcat c_s
                            INNER JOIN subcategoria s ON c_s.id_subcat = s.id
                            INNER JOIN categoria c ON c_s.id_cat = c.id
                            WHERE s.id_estado = 1 and c_s.id_cat = ".$id_cat." order by s.nombre asc";
                    
                    $rs = mysql_query($sql,$conn); 

                    echo "<table border='1' cellpadding='6' cellspacing='0' style='font-size: 12px;text-align: justify;'>";
                    echo "<tr>";
                    while ($row = mysql_fetch_array($rs, MYSQL_NUM)){
                        
                        if($i <= 2){
                            echo "<td width='240'>* <a href='sub_cli.php?id=".$row[0]."&id_ciu=".$id_ciu."'>".convertir_tildes(mayusculas($row[1]))."</a></td>";
                            $i++;
                        }
                        else{
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td width='150'>* <a href='sub_cli.php?id=".$row[0]."&id_ciu=".$id_ciu."'>".convertir_tildes(mayusculas($row[1]))."</a></td>";
                            $i = 1;
                        }
                    }
                    echo "</table><br/>";
                    
                    $bd->cerrar_conexion($rs,$conn);  
                    
                    ?>  
                </div>