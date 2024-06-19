<?php
require("config/codes/config.php");

$tit = "Empresa";
$menu = 1;
$val = $_GET;
head($tit, $menu)
?>
    <div id="cont">
        <div align="left">
            <div style="float: left;">
                <div class="forma" id="cont_div_pro_2" style="padding-right: 10px;">                    
                        <div align="center" class="forma" style="color: #fff;margin-top: 15px;padding-bottom: 15px;border: 1px solid #ccc;background-color: #013355;padding-top: 15px;font-size: 15px;font-weight: bold;text-transform: uppercase;">EMPRESA</div>    
                        
                        <div class="forma" style="background-color: #013355;border: 1px solid #fff;padding: 15px;margin-top: 15px;">
                        <ul style="margin-left: -15px;">
                        <li style="color: #fff;"><b style="text-transform: uppercase;">Quienes somos</b></li>
                        <br/>
                        Somos una empresa dedicada a promover la efectividad en las empresas a traves de soluciones inteligentes en software adaptadas a sus necesidades.
                        <br/><br/>
                        <li style="color: #fff;"><b style="text-transform: uppercase;">Visi�n</b></li>
                        <br/>
                        Innovar el modelo de soluciones en software a trav�s de nuevas y mejores aplicaciones que promueven la interacci�n din�mica con el mundo din�mico y globalizado de hoy. En el 2022 nos presentamos como una empresa reconocida por su amplia gama de soluciones en la mayor cantidad de mercados a nivel nacional e internacional, productos con los mayores indicadores de calidad y confianza, generando empleo a nuestro pa�s y promoviendo el crecimiento de la econ�mica de la naci�n incentivando la educaci�n y crecimiento profesional de nuestros colaboradores. 
                        <br/><br/>
                        <li style="color: #fff;"><b style="text-transform: uppercase;">Misi�n</b></li>
                        <br/>
                        Nuestra mision es construir soluciones para las empresas, obteniendo as� una mayor efectividad, de esta manera promovemos el crecimiento de la naci�n al obtener m�s y mejores utilidades con soluciones adaptadas, enfocadas al control y eficaz toma de decisiones de cualquier empresa. Para desarrollar esta meta, trabajamos en conjunto con nuestro equipo de colaboradores, apasionados y determinados por lo que creemos, enfocados en nuestra meta y trabajando por ella d�a tras d�a.
                        </ul>
                        </div>
                    </div>
                </div>
        </div>
            
        <div style="float:right;">
            <div class="forma" id="livez">
                <div id="tit">Servicios en linea</div>
                <div style="float: right;margin-right: 24px;"><img src="/config/images/chat_img.jpg"/></div>

                <div style="clear: both;float: left;padding:15px;font-size: 13px;text-align: left;">
                    Informaci�n personalizada al instante, comuniquese con un asesor en linea.
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