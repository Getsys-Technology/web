<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");    

    $tit = "Inicio";    
    $id_ciu = $_GET['id_ciu'];
    
    if(empty($id_ciu))
        header ("Location: select.php");
    else{
        cab($tit);
        $nom_ciu = $bd->select_item("nombre","ciudad","id = ".$id_ciu);
?>
            <div id="div_gen_admin">
                <div id="div_tit">
                    INICIO - <?php echo mayusculas($nom_ciu) ?>
                </div>
                <div align="left">
                    <hr size="1"/>
                    <ul>
                        <li><a href="categorias/index.php?id_ciu=<?php echo $id_ciu ?>">
                            Categorias 
                        </a></li>
                        <li><a href="categorias/categorias_subcategorias/index.php?id_ciu=<?php echo $id_ciu ?>">
                            Subcategorias por categorias
                        </a></li>
                        <li><a href="subcategorias/index.php?id_ciu=<?php echo $id_ciu ?>">
                            Subcategorias
                        </a></li>
                        <li><a href="subcategorias/subcategoria_cliente/select.php?id_ciu=<?php echo $id_ciu ?>">
                            Clientes por Subcategorias
                        </a></li>
                    </ul>                    
                    
                    <hr size="1" style="margin-bottom: 25px;"/>
                    <div align="center">
                        <a href="select.php">
                            Cambiar de ciudad
                        </a>
                    </div>
                </div>
            </div>
      
<?php    
fin_();
}
?>           
    