<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");
        
    $id_ciu = $_GET['id_ciu'];
    $id_cat = $_GET['id_cat'];
    $id_subcat = $_GET['id_sub'];
    
    $result = $bd->select_items_2("c_s.id_subcat, c_s.id_cat, s.nombre",
            "cat_subcat c_s
             INNER JOIN subcategoria s ON c_s.id_subcat = s.id
             INNER JOIN categoria c ON c_s.id_cat = c.id","id_cat = ".$id_cat." and id_subcat = ".$id_subcat);
    
    $ciudad = $bd->select_item("nombre","ciudad","id = ".$id_ciu);    
    $tit = "Editar subcategoria por categoria - ".ucfirst($ciudad);
    
    if(empty($id_ciu))
        header ("Location: ../index.php");
    else{       
    cab($tit)    
?>
<script type='text/javascript' src='/local/admin/config/js/categorias_subcategorias/edit.js'></script>

            <div id="div_gen_admin">
                <div id="div_tit">
                    EDICIÓN DE CATEGORIA 
                </div>
                <form action="proc_edit.php" method="post" target="_blank">
                    <div class="nom_field" style="margin-top:-4px;">
                        Subcategoria:
                    </div>
                    <div class="left" style="margin-left:10px;">
                        <?php echo $result[2] ?>
                        <input type="hidden" id="sub" name="sub" value="<?php echo $result[0] ?>"/>
                        <input type="hidden" id="id_cat_ant" name="id_cat_ant" value="<?php echo $result[1] ?>"/>
                        <input type="hidden" id="id_ciu" name="id_ciu" value="<?php echo $id_ciu ?>"/>
                    </div>
                                        
                    <div class="nom_field">
                        Categoria:
                    </div>
                    <div class="left">
                       <select id='categoria' name="categoria">
                            <option value=""></option>
                            <?php echo $bd->select_for_option("id, nombre","categoria","id_ciudad = 2".$id_ciu,$result[1]) ?>
                       </select>
                        <b class="import">*</b>
                    </div>
                    
                    <div align="left;" style="clear: both;width: 300px;background-color: #F7F6B8;padding: 15px;">
                        <b class="import">* Campos obligatorios por llenar.</b>
                    </div>
                    <div id="error"></div>
                    <div id="load"><?php loading() ?></div>
                    
                    <div style="clear: both;margin-top: 15px;">
                        <a href="index.php?id_ciu=<?php echo $id_ciu ?>">                            
                           <input type="button" value="Volver" onclick="location.href('index.php?id_ciu=<?php echo $id_ciu ?>')"/>
                        </a>
                        <input type="reset" name="res" value="Limpiar"/>
                        <input type="button" id="edit" name="edit" value="Editar"/>                                                
                    </div>
                    
                </form>
            </div>
        
        </div>
        
<?php
fin_();
}
?>
           
    