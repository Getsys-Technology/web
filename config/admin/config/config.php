<?php 
require($_SERVER["DOCUMENT_ROOT"]."/local/codes/config.php");

$login = new login();

class login {

public function session()
{
    @session_name();
    @session_start();
    $usuario = $_SESSION['usuario'];
}

public function id_estacion()
{
    global $estacion_actual;
    return $estacion_actual;
}

}

function cab($tit){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='es' lang='es'>

<head>	
	<title><?php echo $tit ?> | Gestor - Guia Multimedia</title>
	
        <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'/>
        <link type="text/css" href="/local/css/main.css" rel="stylesheet" />
        <script type="text/javascript" src="/local/js/jquery.tools.min.js"></script>
        
        <style>
            a{
                text-decoration: none;
            }
            #error{margin:15px;padding:15px;display: none;background-color: #FCDDDD;width: 400px;text-align: justify;}
            #div_gen_admin{
                margin-top: 130px;padding: 15px;margin-left: -4px;margin-bottom: 25px;
            }          
            #div_tit{
                border-top: 1px solid #111;padding: 5px;margin-bottom: 10px;font-weight: bold;
            }
            .nom_field{
                width: 150px;
                float: left;
                padding-top: 5px;
                clear:both;
                text-align: right;
                padding-right: 5px;
            }
            .left{
                float: left;
                margin-bottom: 7px;
            }
            .import{
                font-size: 11px;color: #FF0000;
            }
            #load{background-color: #CCFCCF;display: none;padding: 15px;width: 450px;text-align: center;}
        </style>        
        
        <script>
            function confirm_(formObj) { 
                if(!confirm("Esta seguro de eliminarlo?")) 
                    return false;
                else {
                    location.href(formObj);
                    return false;
                }   
            }      
        </script>
</head>
<body>
    
    <div align="center">
        <div id="div_bod">        
            <div id="cab_div_1" style="margin-top: -15px;">                
                <div id="cab_div_1_1">
                    <a href="index.php?id_ciu=<?php echo $ciu ?>"><img src="/local/images/logo.png" border="0" id="img_in" alt="Inicio"/></a>
                </div>
            </div>
<?php
}

function loading(){
  echo '<div id="cargando" style="display:none; color: green;" align="center">';
  fotos("/local/images/cargando.gif",48,48);
  echo "</div>";

}

function fin_(){
?>            
        
        </div>
    </div>
    
</body>
</html>
<?php
}

?>           
    