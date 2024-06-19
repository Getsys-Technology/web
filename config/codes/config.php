<?php
function head($tit, $menu, $item = 0){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='es' lang='es'>

<head>
        <title><?php echo ucfirst($tit) ?> | CESS Soluciones Informaticas</title>
	
        <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'/>
	<meta name="author" content="Daniel Forero, Brandon Forero | Guia Multimedia - 2012" />
        <meta name="keywords" content="<?php echo $pal ?>" />
        <meta name="description" content="<?php echo $cont ?>" />
        
                <link rel="shortcut icon" href="/config/images/log.ico"/>
                <link type="text/css" href="/config/css/global.css" rel="stylesheet" />
                <link type="text/css" href="/config/css/tabs.css" rel="stylesheet" />      	                
                <link type="text/css" href="/config/css/styles.css" rel="stylesheet" />  
                
                <script type="text/javascript" src="/config/js/jquery.tools.min.js"></script>
                <script type="text/javascript" src="/config/js/slides.min.jquery.js"></script>
                <script type="text/javascript" src="/config/js/val.js"></script>

<script>                
$(document).ready(function() {
// initialize scrollable together with the navigator plugin
$('#slides').slides({
				preload: true,
				preloadImage: '/local/images/slide/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true
			});                       
});
</script>                
                   
</head>
    
<body>    
<div align="center">
    <div id="bar_sup">
        <div align="left" class="anc">
            <div style="float:left;">
                <img src="/config/images/logo.png" width="280" height="90" border="0" alt="Home"/>            
            </div>
            <div style="float:right;">
                <input type="input" id="buscar" value="Buscar..."/>                
                <br/>
                <img src="/config/images/tw.png" width="120" height="30" border="0" alt="Facebook" id="log_fac"/>            
                <img src="/config/images/fb.png" width="120" height="30" border="0" alt="Twitter" id="log_twi"/>            
            </div>
        </div>    
    </div>  
    <!--1 -->
    <div id="men">
        <div align="left">
            <ul class="ul_men">                
                <li <?php if($menu == 4) echo 'id="select"' ?>><a href="contacto.php">CONTACTOS</a></li>
                <li <?php if($menu == 3) echo 'id="select"' ?>><a href="#">CLIENTES</a></li>
                <li <?php if($menu == 2) echo 'id="select"' ?>><a href="productos.php">PRODUCTOS</a></li>
                <li <?php if($menu == 1) echo 'id="select"' ?>><a href="empresa.php">EMPRESA</a></li>
                <li <?php if($menu == 0) echo 'id="select"' ?>><a href="index.php">HOME</a></li>
            </ul>
        </div>
    </div>
    <!--2 -->
    <div id="div_ban">
        <div align="right">
            
            <div id="sli_men">
                <div id="container">
                    <div id="example">
			<div id="slides">
				<div class="slides_container">
					<div class="slide" id="slide_1">                                            
                                            <div class="div_ban_text_1">
                                                <img src="/config/images/contabilidad.png" width="438" height="73" border="0" alt="Facebook" style="margin-left: 515px;"/>
                                                Este módulo permite a las instituciones y/o empresas, realizar de forma segura y eficaz las actividades operativas y gerenciales concernientes al manejo Contable
                                            </div>
                                            <div class="div_ban_text_2">
                                                <img src="/config/images/img_cont.jpg" width="192" height="147" border="0" alt="Facebook" style="margin-left: -165px;"/>            
                                            </div>
                                            <div class="div_ban_text_3">
                                                Principales ventajas:
                                                <br/><br/>
                                                * Aumento en la seguridad de la información.
                                                <br/>       
                                                * Control efectivo de la información Contable y financiera.
                                                <br/>
                                                * Evita re-procesos
                                                <br/>
                                                * Administración efectiva de los movimientos contables.
                                            </div>                                            
                                            
					</div>
					<div class="slide">
						<div class="div_ban_text_1">
                                                <img src="/config/images/nomina.png" width="438" height="73" border="0" alt="Facebook" style="margin-left: 515px;"/>
                                                El modulo permite la implantación de adecuados procesos de gestión y control de los costos de personal. Este modulo permite la liquidación periódica de la nomina de personal, según la normatividad laboral vigente.
                                            </div>
                                            <div class="div_ban_text_2">
                                                <img src="/config/images/nomina.jpg" width="192" height="147" border="0" alt="Facebook" style="margin-left: -165px;"/>            
                                            </div>
                                            <div class="div_ban_text_3">
                                                Principales ventajas:
                                                <br/><br/>
                                                * Aumento en la seguridad de la información.
                                                <br/>       
                                                * Adecuado control de los empleados, novedades de nomina, y liquidaciones periódicas.
                                                <br/>
                                                * Administración efectiva de la Nomina.
                                            </div>    
					</div>
					<div class="slide">
                                           <div class="div_ban_text_1">
                                                <img src="/config/images/cuentas_cobrar.png" width="438" height="73" border="0" alt="Facebook" style="margin-left: 515px;"/>
                                                Este módulo permite crear y configurar los tipos de cuentas por cobrar en cualquier tipo de entidad. Maneja consecutivo único de la cuenta y esta a su vez permite identificar el tipo de documento contable al cual afecta.
                                            </div>
                                            <div class="div_ban_text_2">
                                                <img src="/config/images/cuentas_cobrar.jpg" width="192" height="147" border="0" alt="Facebook" style="margin-left: -165px;"/>            
                                            </div>
                                            <div class="div_ban_text_3">
                                                Principales ventajas:
                                                <br/><br/>
                                                * Aumento en la seguridad de la información.
                                                <br/>       
                                                * Adecuado control de los movimientos a través de los diferentes informes.
                                                <br/>
                                                * Administración efectiva de las cuentas por cobrar.
                                            </div>    
					</div>
					<div class="slide">
                                            <div class="div_ban_text_1">
                                                <img src="/config/images/cuentas_pagar.png" width="438" height="73" border="0" alt="Facebook" style="margin-left: 515px;"/>
                                                El modulo de Cuentas por pagar es un instrumento practico preciso para esta actividad, ya que permite planear y realizar el pago de los compromisos adquiridos conforme a los plazos pactados, montos y formas de pago.
                                            </div>
                                            <div class="div_ban_text_2">
                                                <img src="/config/images/cuentas_pagar.jpg" width="192" height="147" border="0" alt="Facebook" style="margin-left: -165px;"/>            
                                            </div>
                                            <div class="div_ban_text_3">
                                                Principales ventajas:
                                                <br/><br/>
                                                * Aumento en la seguridad de la información.
                                                <br/>       
                                                * Administración Gerencial y operativa de todos los procesos relacionados a la cartera.
                                                <br/>
                                                * Administración efectiva de sus cuentas por pagar.
                                            </div>  
					</div>
					<div class="slide">
                                            <div class="div_ban_text_1">
                                                <img src="/config/images/inventario.png" width="438" height="73" border="0" alt="Facebook" style="margin-left: 515px;"/>
                                                Este módulo permite a las instituciones y/o empresas, realizar de forma segura y eficaz las actividades de manejo de inventarios.
                                            </div>
                                            <div class="div_ban_text_2">
                                                <img src="/config/images/inventarios.jpg" width="192" height="147" border="0" alt="Facebook" style="margin-left: -165px;"/>            
                                            </div>
                                            <div class="div_ban_text_3">
                                                Principales ventajas:
                                                <br/><br/>
                                                * Aumento en la seguridad de la información.
                                                <br/>       
                                                * Adecuado control de las existencias.
                                                <br/>
                                                * Administración efectiva del inventario real
                                                <br/>       
                                                * Oportuno Funcionamiento no solo operativo, de igual manera Gerencial.
                                            </div> 
					</div>
				</div>
			</div>
			<img src="/config/images/transparente.png" width="739" height="341" alt="Noticias" id="frame"/>
                    </div>
                </div>
            </div>  
            
        </div>
    </div>
    <!--3 -->
    <div align="center" style="background-image: url('/config/images/fond_cont.png');width: 100%;height: 100%">
<?php
}

function fin(){
?>
<!--4 -->
    <div style="clear: both;margin-top: 15px;background-image: url('/config/images/bar_aba.jpg');background-repeat: repeat-x;height: 140px;color: #34436E;">
        <div align="left" style="width:1000px;">
            <div style="float:left;width: 190px;">
                <div style="font-size: 16px; margin-top: 15px;font-weight: bold;">Home</div>
                <div>
                    <ul>
                        <li><a href="productos.php" style="color:#666;">Productos</a></li>
                        <li><a href="#" style="color:#666;">Clientes</a></li>
                        <li><a href="#" style="color:#666;">Noticias</a></li>
                    </ul>
                </div>
            </div>
            
            <div style="float:left;width: 190px;margin-left: 10px;font-weight: bold;">
                <div style="font-size: 16px; margin-top: 15px;">Empresa</div>
                <div>
                    <ul>
                        <li><a href="empresa.php" style="color:#666;">Quienes somos</a></li>
                        <li><a href="empresa.php" style="color:#666;">Visión</a></li>
                        <li><a href="empresa.php" style="color:#666;">Misión</a></li>
                    </ul>
                </div>
            </div>
            
            <div style="float:left;width: 190px;margin-left: 10px;font-weight: bold;">
                <div style="font-size: 16px; margin-top: 15px;">Sitios de interes</div>
                <div>
                    <ul>
                        <li><a href="#" style="color:#666;">www.ejemplo.com</a></li>
                        <li><a href="#" style="color:#666;">www.ejemplo.com</a></li>
                        <li><a href="#" style="color:#666;">www.ejemplo.com</a></li>
                    </ul>
                </div>
            </div>
            
            <div style="float:left;width: 190px;margin-left: 10px;font-weight: bold;">
                <div style="font-size: 16px; margin-top: 15px;">Bogotá</div>
                <div>
                    <ul>
                        <li>Dirección: <b style="font-weight: normal;color:#666;">Cll 14 sur # 24 H 79</b></li>
                        <li>Tel: <b style="font-weight: normal;color:#666;">(57 1) 239 39 95</b></li>
                        <li>Cel: <b style="font-weight: normal;color:#666;">318 861 86 26</b></li>
                    </ul>
                </div>
            </div>
            
            <div style="float:left;width: 190px;margin-left: 10px;font-weight: bold;">
                <div style="font-size: 16px; margin-top: 15px;margin-bottom: 15px;">Quedate con nosotros:</div>
                <div>
                    <img src="/config/images/face.jpg" width="130" height="30" border="0" alt="Twitter" style="margin-left: 35px;"/>            
                    <br/>
                    <img src="/config/images/twi.jpg" width="100" height="30" border="0" alt="Facebook" style="margin-left: 35px;"/>                                
                </div>
            </div>
        </div>    
    </div>
    <div style="clear: both;background-color: #1B41A9;height: 20px;color: #fff;">
        <div align="left" style="width:1000px;padding: 2px;">
            <div style="float:left;">© 2012 CESS - Soluciones informaticas</div>
            <div style="float:right;margin-right: 35px;">Diseño: Guia Multimedia</div>
        </div>
    </div>

</div>        
</body>
</html>      
<?php    
}
?>



                                
                          