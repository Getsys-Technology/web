<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");
        
    $id_ciu = $_GET['id_ciu'];
    $ciudad = $bd->select_item("nombre","ciudad","id = ".$id_ciu);    
    $tit = "Agregar subcategoria por categoria - ".ucfirst($ciudad);
    
    if(empty($id_ciu))
        header ("Location: ../index.php");
    else{       
    cab($tit)    
?>
<script type='text/javascript' src='/local/admin/config/js/categorias_subcategorias/add.js'></script>

            <div id="div_gen_admin">
                <div id="div_tit">
                    SUBCATEGORIAS POR CATEGORIA - <?php echo mayusculas($ciudad) ?>
                </div>
                <form action="proc_add.php" method="post" name="form">
                    
                    <div class="nom_field">
                        Categoria
                    </div>
                    <div class="left">
                       <select id='categoria' name="id_cat">
                           <option value=""></option>
                            <?php echo $bd->select_for_option("id, nombre","categoria","id_ciu = ".$id_ciu." order by nombre asc") ?>
                       </select>
                        <b class="import">*</b>
                    </div>
                    
                    <div class="nom_field">
                        Subcategoria
                    </div>
                    <div class="left">
                       <select id='sub' name="id_subcat">
                           <option value=""></option>
                            <?php echo $bd->select_for_option("id, nombre","subcategoria","id_ciu = ".$id_ciu." order by nombre asc") ?>
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
                        <input type="button" id="add" name="add" value="Crear"/>
                    </div>
                    
                </form>
            </div>
        
        </div>
        
<?php
fin_();
}
?>