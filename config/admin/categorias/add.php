<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");
        
    $id_ciu = $_GET['id_ciu'];
    $ciudad = $bd->select_item("nombre","ciudad","id = ".$id_ciu);
    $id = $bd->select_count("select max(id) from categoria") + 1;
    $tit = "Agregar categoria - ".ucfirst($ciudad);
    
    if(empty($id_ciu))
        header ("Location: ../index.php");
    else{       
    cab($tit)    
?>
<script type='text/javascript' src='/local/admin/config/js/categorias/add.js'></script>

            <div id="div_gen_admin">
                <div id="div_tit">
                    CATEGORIA NUEVA - <?php echo mayusculas($ciudad) ?>
                </div>
                <form action="proc_add.php" name="form" method="post">
                    <div class="nom_field">
                        ID
                    </div>
                    <div class="left" style="padding-top:6px;padding-left: 7px;">                       
                        <input type="text" id="id" name="id" value="<?echo $id ?>"/>
                    </div>
                    
                    <div class="nom_field">
                        Nombre
                    </div>
                    <div class="left">
                        <input type="text" id="nombre" name="nombre" size="55" value=""/> <b class="import">*</b>
                    </div>
                    
                    <div class="nom_field">
                        Nombre Ingles
                    </div>
                    <div class="left">
                        <input type="text" id="nombre_en" name="nombre_en" size="55" value=""/> <b class="import">*</b>
                    </div>                    
                    
                    <div class="nom_field">
                        Estadistica Español
                    </div>
                    <div class="left">
                        <input type="text" id="est_esp" name="est_esp" size="5" value=""/> 
                        <b class="import">** En caso que se comience con otro número excepto 1</b>
                    </div>
                    
                    <div class="nom_field">
                        Estadistica Ingles
                    </div>
                    <div class="left">
                        <input type="text" id="est_en" name="est_en" size="5" value=""/> 
                        <b class="import">** En caso que se comience con otro número excepto 1</b>
                    </div>
                                        
                    <div class="nom_field">
                        Ciudad
                    </div>
                    <div class="left" style="padding-top:6px;padding-left: 7px;">
                       <?php echo $ciudad ?>
                        <input type="hidden" id="id_ciu" name="id_ciu" value="<?echo $id_ciu ?>"/>
                    </div>
                    
                    <div class="nom_field">
                        Estado
                    </div>
                    <div class="left">
                       <select id='estado' name="estado">
                            <option value=""></option>
                            <option value="1">Activo</option>
                            <option value="0">No Activo</option>
                       </select>
                        <b class="import">*</b>
                    </div>
                    
                    <div class="nom_field">
                        Ruta completa
                    </div>
                    <div class="left">
                        <input type="text" id="ruta" name="ruta" size="30" value=""/>  <b class="import">** Para lectura de fotos.</b>
                    </div>
                    
                    <div class="nom_field">
                        Ruta link
                    </div>
                    <div class="left">
                        <input type="text" id="ruta_link" name="ruta_link" size="30" value=""/>  <b class="import">** Para menu.</b>
                    </div>
                    
                    <div class="nom_field">
                        Nombre foto
                    </div>
                    <div class="left">
                        <input type="text" id="nom_foto" name="nom_fot" size="30" value=""/>  <b class="import">*</b>
                    </div>
                    
                    <div class="nom_field">
                        Numero de orden menú
                    </div>
                    <div class="left">
                        <input type="text" id="num_ord" name="num_ord" size="5" value=""/>  <b class="import">*</b>
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
                        <input type="button" id="add" value="Crear"/>
                    </div>                    
                </form>
            </div>
        
<?php
fin_();
}
?>