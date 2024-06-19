<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");

    $tit = "Categorias";    
    $id_ciu = $_GET['id_ciu'];
    
    if(empty($id_ciu))
        header ("Location: ../index.php");
    else{        
        $nom_ciu = $bd->select_item("nombre","ciudad","id = ".$id_ciu);
        cab($tit)
?>
            <div id="div_gen_admin">
                <div id="div_tit">
                    CATEGORIAS - <?php echo mayusculas($nom_ciu) ?>
                </div>
                <div>
                    <hr size="1"/>
                        <a href="../index.php?id_ciu=<?php echo $id_ciu ?>">                            
                            <input type="button" value="Volver" onclick="location.href('../index.php?id_ciu=<?php echo $id_ciu ?>')"/>                            
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
                    
                    $order = $_GET["crit"];
                                        
                    if(empty($order))
                        $order = "cat.id_ciu, cat.num_ord";

                    //examino la página a mostrar y el inicio del registro a mostrar 
                    $pagina = $_GET["pagina"]; 
                    if (!$pagina) { 
                        $inicio = 0; 
                        $pagina = 1; 
                    } 
                    else 
                        $inicio = ($pagina - 1) * $tam_pag; 
                    
                    $sql = "select cat.id, cat.nombre, cat.nombre_en, cat.est_esp, cat.est_eng, cat.ruta, cat.ruta_cam, cat.nom_foto, c.nombre, 
                            e.nombre, cat.num_ord from categoria cat
                            inner join ciudad c on cat.id_ciu = c.id
                            inner join estados e on cat.id_estado = e.id  
                            where cat.id_ciu = ".$id_ciu."
                            order by ".$order;
                    
                    $rs = @mysql_query($sql,$conn); 

                    $num_total_registros = @mysql_num_rows($rs); 
                    //calculo el total de páginas 
                    $total_paginas = ceil($num_total_registros / $tam_pag); 

                    //construyo la sentencia SQL 
                    $ssql = "select cat.id, cat.nombre, cat.nombre_en, cat.est_esp, cat.est_eng, cat.ruta, cat.ruta_cam, cat.nom_foto, c.nombre, 
                            e.nombre, cat.num_ord from categoria cat
                            inner join ciudad c on cat.id_ciu = c.id
                            inner join estados e on cat.id_estado = e.id   
                            where cat.id_ciu = ".$id_ciu."
                            order by ".$order." limit " . $inicio . "," . $tam_pag; 

                    $rs = @mysql_query($ssql); 
                    
                    echo "<table border='1' cellpadding='3' cellspacing='0' style='font-size: 12px;'>";
                    echo "<tr style='background-color: #2C2C2C;text-align: center;font-weight: bold;color: #fff;'>";
                    echo "<td width='40'>EDITAR</td>";
                    echo "<td width='120'>NOMBRE</td>";
                    echo "<td width='120'>NOMBRE INGLES</td>";
                    echo "<td width='50'>ESTADISTICA ESPAÑOL</td>";
                    echo "<td width='50'>ESTADISTICA INGLES</td>";
                    echo "<td width='50'>RUTA LINK</td>";
                    echo "<td width='50'>RUTA COMPLETA</td>";
                    echo "<td width='50'>NOMBRE FOTO</td>";
                    echo "<td width='50'>CIUDAD</td>";
                    echo "<td width='50'>ESTADO</td>";
                    echo "<td width='50'>NÚMERO DE ITEM</td>";                    
                    echo "</tr>";
                    while ($row = @mysql_fetch_array($rs, MYSQL_NUM)){
                        echo "<tr style='background-color:$color;'>";
                        echo "<td align='center'>
                                <a href='edit.php?id=".$row[0]."'>Editar</a>
                                <a href='delete.php?id=".$row[0]."&id_ciu=".$id_ciu."' onclick='return confirm_(this);'>Borrar</a>
                              </td>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "<td align='center'>".$row[3]."</td>";
                        echo "<td align='center'>".$row[4]."</td>";
                        echo "<td>".$row[5]."</td>";
                        echo "<td>".$row[6]."</td>";
                        echo "<td align='center'>".$row[7]."</td>";
                        echo "<td align='center'>".$row[8]."</td>";
                        echo "<td align='center'>".$row[9]."</td>";
                        echo "<td align='center'>".$row[10]."</td>";                        
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
                                echo "<a href='index.php?pagina=" . $i . "&id_ciu=".$id_ciu."'>" . $i . "</a> "; 
                        } 
                    }
                    ?>
                    <hr size="1" style="margin-top: 25px;"/>
                        <a href="../index.php?id_ciu=<?php echo $id_ciu ?>">                            
                            <input type="button" value="Volver" onclick="location.href('../index.php?id_ciu=<?php echo $id_ciu ?>')"/>                            
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