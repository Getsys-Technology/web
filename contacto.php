<?php
require("config/codes/config.php");

$tit = "Contactos";
$menu = 4;
$val = $_GET['id'];

head($tit, $menu)
?>
    <div id="cont">
        <div align="left">
            <div style="float: left;">
                                         
                                
                <div class="forma" id="cont_div_pro_2">                    
                    
                <div align="center" class="tit_prod" style="color: #fff;">CONTACTENOS</div>    
                <br/><br/>
                    
                <fieldset class="forma" id="contactenos" style="margin-top:-40px;color:#fff;border:0;width: 600px;padding:10px;">
                <form name="enviar_comentarios" action="env.php" target="_blank" method="post">
                    <div style="padding-top:15px;">
                        <fieldset style="padding:10px;width: 610px;background-color: #013355;">
                            <legend>Información Personal</legend>
                                <input type="hidden" name="ciudad" value="<?php echo $ciudad ?>"/>
                                <table><tr><td>
                                        <input type="text" value="Nombres:" name="nombres" id="nombres" size="35" class="keyboardInput" style="color:#999999;"/>
                                        <br/><br/>
                                        <input type="text" value="E-mail:" name="email" id="email" size="35" class="keyboardInput" style="color:#999999;"/>
                                    </td>
                                    <td>
                                        <input type="text" value="Teléfono:" name="telefono" id="telefono" size="35" class="keyboardInput" style="color:#999999;"/>                                        
                                    </td>
                                </tr></table>
                          </fieldset>
                     </div>
                     <br/>
                     <fieldset class="forma" style="padding:10px;background-color: #013355;">
                        <legend>Comentarios:</legend>
                        <textarea cols="70" rows="7" name="comentarios" id="comentarios" onKeyUp="return maximaLongitud(this,254)" class="keyboardInput" style="padding:15px;border:0;color:#999999;background: url('/local/images/contact/text.png') no-repeat 0% 5%;background-color: #fff;"></textarea>
                     </fieldset>
                     <br/>
                     <div align="center">
                        <input type="button" name="agregar" id="agregar_com" value="Enviar" style="padding:5px;"/>
                     </div>
                     </form>
                     </fieldset>
                     <div id="validacion" style="background-color:#F7BDBD;padding: 15px;width: 90%;margin-top:-15px;text-align: justify;padding-left: 40px;margin-top:-15px;"></div>
                                                
                    
                        <b style="text-transform: uppercase;">Datos de contacto:</b>
                        <br/><br/>                        
                        Darío Arcos
                        <br/>
                        Bogotá
                        <br/>
                        <b>Dirección:</b> Cll 14 sur # 24 H 79
                        <br/>
                        <b>Tel.</b> 2393995
                        <br/>
                        <b>Cel.</b> 3188618626

                    </div>
                </div>
        </div>
            
        <div style="float:right;">
            <div class="forma" id="livez">
                <div id="tit">Servicios en linea</div>
                <div style="float: right;margin-right: 24px;"><img src="/config/images/chat_img.jpg"/></div>

                <div style="clear: both;float: left;padding:15px;font-size: 13px;text-align: left;">
                    Información personalizada al instante, comuniquese con un asesor en linea.
                    <br/><br/>
                    Estado:
                    <div style="margin-top: 25px;margin-left: 65px;">
                    <!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) --><div style="text-align:center;width:120px;"><a href="javascript:void(window.open('http://www.cessoluciones.com/livezilla/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))"><img src="http://www.cessoluciones.com/livezilla/image.php?id=01&amp;type=inlay" width="120" height="30" border="0" alt="LiveZilla Live Help"></a><div style="margin-top:2px;"><a href="http://www.livezilla.net" target="_blank" title="LiveZilla Live Help" style="font-size:10px;color:#bfbfbf;text-decoration:none;font-family:verdana,arial,tahoma;">LiveZilla Live Help</a></div></div><!-- http://www.LiveZilla.net Chat Button Link Code --><!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --><div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
                    var script = document.createElement("script");script.type="text/javascript";var src = "http://www.cessoluciones.com/livezilla/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script><noscript><img src="http://www.cessoluciones.com/livezilla/server.php?request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt=""></noscript><!-- http://www.LiveZilla.net Tracking Code -->
                    </div>
                </div>
            </div>            
            <div class="forma" style="clear:both;float: left; width: 280px;margin-top: 20px;height: 250px;margin-left: 15px;margin-bottom: 35px;">
                <ul class="tabs">
                    <li><a href="#">RECOMENDADO</a></li>
                    <li><a href="#">PARTICIPE</a></li>                    
                </ul>
                
                <!-- tab "panes" -->
                <div class="panes">
                    <div>
                        <img src="/config/images/1.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;"/> Importancia de las redes.
                        <br/>
                        <img src="/config/images/2.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;margin-top: 7px;"/> Conoces tu empresa.
                        <br/>
                        <img src="/config/images/3.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;margin-top: 7px;"/> Manejo adecuado de lo...
                        <br/>
                        <img src="/config/images/4.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;margin-top: 7px;"/> Creando una cuenta de cobro.
                        <br/>
                        <img src="/config/images/5.png" width="37" height="37" valign="middle" style="margin-left: 10px;margin-right: 10px;margin-top: 7px;"/> Inventario.
                    </div>
                    <div>No disponible.</div>   	
                </div>
                
                <script>
                    // perform JavaScript after the document is scriptable.
                    $(function() {
                    // setup ul.tabs to work as tabs for each div directly under div.panes
                    $("ul.tabs").tabs("div.panes > div");
                    });
                </script>
            </div>
        </div>
        
    </div>

<?php
fin();
?>     