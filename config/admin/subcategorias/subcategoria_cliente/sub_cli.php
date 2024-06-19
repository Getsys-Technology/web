<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");
    
    $id_sub = $_GET['id'];
    $id_ciu = $_GET['id_ciu'];
    $tit = "Seleccionador ciudad";
    $nombre = $bd->select_item("nombre","subcategoria","id = ".$id_sub);
    
    cab($tit)
?>
<form action="proc_sub.php" method="get">
            <div id="div_gen_admin">
                <div id="div_tit">
                    CLIENTES - <b><?php echo $nombre ?></b>
                </div>
                <div align="center" style="clear: both;margin-top: 15px;margin-bottom: 10px;">
                        <input type="submit" name="env" value="Crear o Editar"/>
                        <input type="reset" name="res" value="Limpiar"/>
                        <a href="../../index.php?id_ciu=<?php echo $id_ciu ?>">                            
                           <input type="button" value="Volver" onclick="location.href('../../index.php?id_ciu=<?php echo $id_ciu ?>')"/>
                        </a>
                </div>
                <div align="center" style="width: 900px;border: 1px solid #ccc;text-align: left;background-color: #fff;padding: 10px;">
                
                    <input type="hidden" name="id_sub" value="<?php echo $id_sub ?>"/>
                    <input type="hidden" name="id_ciu" value="<?php echo $id_ciu ?>"/>
                    <?php
                        $sql = "select id, nombre from cliente where id_ciu = ".$id_ciu." and id_estado = 1 order by nombre asc";
                        $cli = $bd->exe_query($sql);
                        
                        echo "<table align='center' border='1' cellpadding='6' cellspacing='0' style='font-size: 11px;text-align: justify;'>";
                        echo "<tr>";
                        while ($row = mysql_fetch_array($cli, MYSQL_NUM)){
                            $count = $bd->select_count("select count(*) from subcat_clie where id_cli = ".$row[0]." and id_sub = ".$id_sub);
                            
                            if($i <= 2){
                                if($count == 1)
                                    echo '<td width="270"><input type="checkbox" name="'.$row[0].'" value="'.$row[0].'" checked="checked"/> '.mayusculas($row[1])."</td>";
                                else
                                    echo '<td width="270"><input type="checkbox" name="'.$row[0].'" value="'.$row[0].'"/> '.mayusculas($row[1])."</td>";
                                $i++;
                            }
                            else{   
                                echo "</tr>";
                                echo "<tr>";
                                if($count == 1)
                                    echo '<td width="270"><input type="checkbox" name="'.$row[0].'" value="'.$row[0].'" checked="checked"/> '.mayusculas($row[1])."</td>";
                                else
                                    echo '<td width="270"><input type="checkbox" name="'.$row[0].'" value="'.$row[0].'"/> '.mayusculas($row[1])."</td>";
                                $i = 1;
                            }
                            
                        }  
                        echo "</table><br/>";
                    
                        $bd->cerrar_conexion($rs,$conn);  
                    ?>
                    
                    <div align="center" style="clear: both;margin-top: 15px;">
                        <input type="submit" name="env" value="Crear o Editar"/>
                        <input type="reset" name="res" value="Limpiar"/>
                        <a href="../../index.php?id_ciu=<?php echo $id_ciu ?>">                            
                           <input type="button" value="Volver" onclick="location.href('../../index.php?id_ciu=<?php echo $id_ciu ?>')"/>
                        </a>
                    </div>
                    
                </form>
            </div>
        
        </div>        
</form>
<?php
    fin_()
?>  
           