<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");    

    $tit = "Subcategorias por categorias";    
    $id_ciu = $_GET['id_ciu'];
    
    if(empty($id_ciu))
        header ("Location: select.php");
    else{
        cab($tit); 
        $nom_ciu = $bd->select_item("nombre","ciudad","id = ".$id_ciu);
?>
            <div id="div_gen_admin">
                <div id="div_tit">
                    SUBCATEGORIAS POR CATEGORIAS - <?php echo mayusculas($nom_ciu) ?>
                </div>
                <div>
                    <hr size="1"/>
                        <a href="../../index.php?id_ciu=<?php echo $id_ciu ?>">                            
                            <input type="button" value="Volver" onclick="location.href('../../index.php?id_ciu=<?php echo $id_ciu ?>')"/>                            
                        </a>
                        <a href="add.php?id_ciu=<?php echo $id_ciu ?>">                            
                            <input type="button" value="Insertar" onclick="location.href('add.php?id_ciu=<?php echo $id_ciu ?>')"/>                            
                        </a>
                    <hr size="1" style="margin-bottom: 25px;"/>
                    
                    <?php
                    
                    $conn = $bd->conexion();                    
                    //Limito la busqueda 
                    $tam_pag = 10; 
                    $color = "#ECEBEB";

                    //examino la página a mostrar y el inicio del registro a mostrar 
                    $pagina = $_GET["pag"]; 
                    if (!$pagina) { 
                        $inicio = 0; 
                        $pagina = 1; 
                    } 
                    else 
                        $inicio = ($pagina - 1) * $tam_pag; 
                    
                    
                    $sql = "select c_s.id_subcat, c_s.id_cat, s.nombre, c.nombre
                            FROM cat_subcat c_s
                            INNER JOIN subcategoria s ON c_s.id_subcat = s.id
                            INNER JOIN categoria c ON c_s.id_cat = c.id
                            INNER JOIN ciudad ciu ON c.id_ciu = ciu.id
                            WHERE s.id_estado = 1 and  c.id_ciu = ".$id_ciu." order by c.id asc";
                             
                    $rs = @mysql_query($sql,$conn); 

                    $num_total_registros = @mysql_num_rows($rs); 
                    //calculo el total de páginas 
                    $total_paginas = ceil($num_total_registros / $tam_pag); 

                    //construyo la sentencia SQL 
                    $ssql = "select c_s.id_subcat, c_s.id_cat, s.nombre, c.nombre
                            FROM cat_subcat c_s
                            INNER JOIN subcategoria s ON c_s.id_subcat = s.id
                            INNER JOIN categoria c ON c_s.id_cat = c.id
                            INNER JOIN ciudad ciu ON c.id_ciu = ciu.id
                            WHERE s.id_estado = 1 and  c.id_ciu = ".$id_ciu." order by c.id asc limit " . $inicio . "," . $tam_pag; 

                    $rs = @mysql_query($ssql); 
                    
                    echo "<table border='1' cellpadding='6' cellspacing='0' style='font-size: 12px;'>";
                    echo "<tr style='background-color: #2C2C2C;text-align: center;font-weight: bold;color: #fff;'>";
                    echo "<td width='80'>EDITAR</td>";
                    echo "<td width='150'>SUBCATEGORIA</td>";
                    echo "<td width='120'>CATEGORIA</td>";                   
                    echo "</tr>";
                    while ($row = @mysql_fetch_array($rs, MYSQL_NUM)){
                        echo "<tr style='background-color:$color;'>";
                        echo "<td align='center'>
                                <a href='edit.php?id_sub=".$row[0]."&id_cat=".$row[1]."&id_ciu=".$id_ciu."'>Editar</a>&nbsp;&nbsp;&nbsp;
                                <a href='delete.php?id_sub=".$row[0]."&id_cat=".$row[1]."&id_ciu=".$id_ciu."' onclick='return confirm_(this);'>Borrar</a>
                              </td>";
                        echo "<td>".mayusculas($row[2])."</td>";
                        echo "<td>".mayusculas($row[3])."</td>";                        
                        echo "</tr>";
                        $color = $color == "#ECEBEB" ? "#DAD5D5" : "#ECEBEB";
                    }
                    echo "</table><br/>";
                    
                    $bd->cerrar_conexion($rs,$conn);                    

                    //muestro los distintos índices de las páginas, si es que hay varias páginas 
                    if ($total_paginas > 1){ 
                        for ($i=1;$i<=$total_paginas;$i++){ 
                            if ($pagina == $i) 
                                echo $pagina . " "; 
                            else 
                                echo "<a href='index.php?pag=" . $i . "&id_ciu=".$id_ciu."'>" . $i . "</a> "; 
                        } 
                    }
                    ?>
                    <hr size="1" style="margin-top: 25px;"/>
                        <a href="../../index.php?id_ciu=<?php echo $id_ciu ?>">                            
                            <input type="button" value="Volver" onclick="location.href('../../index.php?id_ciu=<?php echo $id_ciu ?>')"/>                            
                        </a>
                        <a href="add.php?id_ciu=<?php echo $id_ciu ?>">
                            <input type="button" value="Insertar" onclick="location.href('add.php?id_ciu=<?php echo $id_ciu ?>')"/>                            
                        </a>
                    <hr size="1"/>
                </div>
            </div>
<?php
    fin_();
    }
?>
           
    