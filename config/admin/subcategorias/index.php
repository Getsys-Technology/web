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
                    SUBCATEGORIAS - <?php echo mayusculas($nom_ciu) ?>
                </div>
                <div>
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

                    //examino la página a mostrar y el inicio del registro a mostrar 
                    $pagina = $_GET["pagina"]; 
                    if (!$pagina) { 
                        $inicio = 0; 
                        $pagina = 1; 
                    } 
                    else 
                        $inicio = ($pagina - 1) * $tam_pag; 

                    //miro a ver el número total de campos que hay en la tabla con esa búsqueda 
                    $sql = "select s.nombre, s.nombre_en, s.est_esp, s.est_eng, s.ruta, s.nom_foto, c.nombre, e.nombre, s.id from subcategoria s
                        inner join ciudad c on s.id_ciu = c.id
                        inner join estados e on s.id_estado = e.id 
                        where s.id_ciu = ".$id_ciu." order by s.nombre"; 
                    
                    $rs = @mysql_query($sql,$conn); 

                    $num_total_registros = @mysql_num_rows($rs); 
                    //calculo el total de páginas 
                    $total_paginas = ceil($num_total_registros / $tam_pag); 

                    //construyo la sentencia SQL 
                    $ssql = "select s.nombre, s.nombre_en, s.est_esp, s.est_eng, s.ruta, s.nom_foto, c.nombre, e.nombre, s.id from subcategoria s
                            inner join ciudad c on s.id_ciu = c.id
                            inner join estados e on s.id_estado = e.id
                            where s.id_ciu = ".$id_ciu."
                            order by s.nombre limit " . $inicio . "," . $tam_pag; 

                    $rs = @mysql_query($ssql); 
                    $color = "#ECEBEB";

                    echo "<table border='1' cellpadding='6' cellspacing='0' style='font-size: 12px;'>";
                    echo "<tr style='background-color: #2C2C2C;text-align: center;font-weight: bold;color: #fff;'>";
                    echo "<td width='40'>EDITAR</td>";
                    echo "<td width='200'>NOMBRE</td>";
                    echo "<td width='200'>NOMBRE INGLES</td>";
                    echo "<td width='100'>ESTADISTICA ESPAÑOL</td>";
                    echo "<td width='100'>ESTADISTICA INGLES</td>";
                    echo "<td width='140'>RUTA</td>";
                    echo "<td>NOMBRE FOTO</td>";
                    echo "<td>CIUDAD</td>";
                    echo "<td>ESTADO</td>";
                    echo "</tr>";
                    while ($row = @mysql_fetch_array($rs, MYSQL_NUM)){
                        echo "<tr style='background-color:$color;'>";
                        echo "<td align='center'>
                                <a href='edit.php?id=".$row[8]."'>Editar</a>
                                <a href='delete.php?id=".$row[8]."&id_ciu=".$id_ciu."' onclick='return confirm_(this);'>Borrar</a>
                              </td>";
                        echo "<td>".$row[0]."</td>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td align='center'>".$row[2]."</td>";
                        echo "<td align='center'>".$row[3]."</td>";
                        echo "<td>".$row[4]."</td>";
                        echo "<td>".$row[5]."</td>";
                        echo "<td align='center'>".$row[6]."</td>";
                        echo "<td align='center'>".$row[7]."</td>";                        
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