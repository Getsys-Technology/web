<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");
    
    $id = $_GET['id'];
    
    $result = $bd->select_items_2("id, nombre, nombre_en, est_esp, est_eng, ruta, id_ciu, id_estado, nom_foto","subcategoria","id = ".$id);
    $ciudad = $bd->select_item("nombre","ciudad","id = ".$result[6]);
    $tit = "Editar subcategoria - ".ucfirst($ciudad);
    
    cab($tit)    
?>
<script type='text/javascript' src='/local/admin/config/js/subcategorias/edit.js'></script>

          <div style="margin-top: 130px;padding: 15px;margin-left: 15px;margin-bottom: 25px;">
                <div style="border-top: 1px solid #111;border-bottom: 1px solid #111;padding: 5px;margin-bottom: 15px;font-weight: bold;">
                    EDICIÓN DE SUBCATEGORIA
                </div>
                <form action="proc_edit.php" method="post" target="_blank">
                    <div class="nom_field" style="margin-top:-4px;">
                        ID
                    </div>
                    <div class="left" style="margin-left:10px;">
                        <?php echo $result[0] ?>
                        <input type="hidden" name="id" id="id" value="<?php echo $result[0] ?>"/>
                    </div>
                    
                    <div class="nom_field">
                        Nombre
                    </div>
                    <div class="left">
                        <input type="text" id="nombre" name="nombre" size="55" value="<?php echo $result[1] ?>"/> <b class="import">*</b>
                    </div>
                    
                    <div class="nom_field">
                        Nombre Ingles
                    </div>
                    <div class="left">
                        <input type="text" id="nombre_en" name="nombre_en" size="55" value="<?php echo $result[2] ?>"/> <b class="import">*</b>
                    </div>                    
                    
                    <div class="nom_field" style="margin-top:-4px;">
                        Estadistica Español
                    </div>
                    <div class="left" style="margin-left:10px;">
                        <?php echo $result[3] ?>
                        <input type="hidden" id="est_esp" name="est_esp" value="<?php echo $result[3] ?>"/>
                    </div>
                    
                    <div class="nom_field" style="margin-top:-4px;">
                        Estadistica Ingles
                    </div>
                    <div class="left" style="margin-left:10px;">
                        <?php echo $result[4] ?>
                        <input type="hidden" id="est_eng" name="est_eng" value="<?php echo $result[4] ?>"/>
                    </div>
                                        
                    <div class="nom_field">
                        Ciudad
                    </div>
                    <div class="left" style="padding-top:6px;padding-left: 7px;">
                       <?php echo $ciudad ?>
                        <input type="hidden" id="id_ciu" name="id_ciu" value="<?echo $result[6] ?>"/>
                    </div>
                    
                    <div class="nom_field">
                        Estado
                    </div>
                    <div class="left">
                       <select id='estado' name="estado">
                            <option value=""></option>
                            <option value="1" <?php $bd->selected(1,$result[7]) ?>>Activo</option>
                            <option value="0" <?php $bd->selected(0,$result[7]) ?>>No Activo</option>
                       </select>
                        <b class="import">*</b>
                    </div>
                    
                    <div class="nom_field">
                        Ruta
                    </div>
                    <div class="left">
                        <input type="text" id="ruta" name="ruta" size="30" value="<?php echo $result[5] ?>"/>  <b class="import">** Para lectura de fotos.</b>
                    </div>
                    
                    
                    <div class="nom_field">
                        Nombre foto
                    </div>
                    <div class="left">
                        <input type="text" id="nom_fot" name="nom_fot" size="30" value="<?php echo $result[8] ?>"/>  <b class="import">*</b>
                    </div>
                                    
                    
                    <div align="left;" style="clear: both;width: 300px;background-color: #F7F6B8;padding: 15px;">
                        <b class="import">* Campos obligatorios por llenar.</b>
                    </div>
                    <div id="error"></div>
                    <div id="load"><?php loading() ?></div>
                    
                    <div style="clear: both;margin-top: 15px;">
                        <a href="index.php?id_ciu=<?php echo $result[6] ?>">                            
                           <input type="button" value="Volver" onclick="location.href('index.php?id_ciu=<?php echo $result[6] ?>')"/>
                        </a>
                        <input type="reset" name="res" value="Limpiar"/>
                        <input type="button" id="edit" name="edit" value="Editar"/>                                                
                    </div>
                    
                </form>
            </div>
        
<?php
    fin_()
?>    