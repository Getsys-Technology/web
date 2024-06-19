<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");

    $tit = "Seleccionador categoria";
    $id_ciu = $_GET['id_ciu'];
    
    $nom_ciu = $bd->select_item("nombre","ciudad","id = ".$id_ciu);
    cab($tit)
?>
<script type='text/javascript' src='/local/admin/config/js/subcategorias_cliente/select.js'></script>

            <div id="div_gen_admin">
                <div id="div_tit">
                    CATEGORIAS - <?php echo mayusculas($nom_ciu) ?>
                </div>
                <div align="center">
                    <hr size="1"/>
                    
                    <div align="center" style="border: 1px solid #111;margin: 10px;padding: 15px;background-color: #fff;">                        
                        
                            Seleccione categoría: 
                            <br/><br/>
                            <select id='id_cat' name="id_cat">
                                <option value="">...Seleccione...</option>
                                <?php $bd->select_for_option("id, nombre","categoria","id_ciu = ".$id_ciu." order by nombre asc") ?>
                            </select> 
                            <input type="hidden" id="id_ciu" value="<?php echo $id_ciu ?>"/>
                            <hr/>
                            <div id="load" style="background-color: #fff;width: 100%;margin:0;padding: 10px;"><?php loading() ?></div>
                            
                    </div>
                    
                    <hr size="1" style="margin-bottom: 25px;"/>
                   
                </div>
            </div>
        
<?php
    fin_()
?>           
    