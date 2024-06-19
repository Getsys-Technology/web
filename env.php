<?php

$nombres = $_POST['nombres'];
$telefono = $_POST['telefono'];
$email_per = $_POST['email'];
$comentarios = $_POST['comentarios'];
$para = "da_alforero@hotmail.com, gerencia.gral@cessoluciones.com";

$comp = array("url","link","http","[^A-Za-z0-9.?!]");

foreach($comp as $rep)
    $comentarios = ereg_replace("$rep", " ", $comentarios);

    $titulo = "Comentarios CESS página web";
    // message
    $mensaje = '
    <html>
    <head>
      <title>Comentarios CESS</title>
    </head>
    <body style="background-color: #111;margin:0;padding:0;">
    
      <table align="center" border="1" cellpadding="3" cellspacing="0" style="background-color: #fff;">
            <tr>
                <td colspan="1" style="border:0;"><img src="http://cessoluciones.com/config/images/logo.png" border="0"/></td>
                <td colspan="2" style="font-weight: bold;border:0;"> COMENTARIOS CESS </td>
            </tr>
    
            <tr>
                <th>Usuario que realiza comentario</th><th>Télefono</th><th>E-mail</th><th>Comentario</th>
            </tr>
    
            <tr>
                <td>'.$nombres.'</td><td>'.$telefono.'</td><td>'.$email_per.'</td><td>'.$comentarios.'</td>
            </tr>
      </table>
    </body>
    </html>
    ';
    
// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$enviar = @mail($para, $titulo, $mensaje, $cabeceras);

if(!$enviar)
    echo "Error al enviar";
else{
    
    echo $cerrar = "<script language='javascript'>
        alert('Gracias por sus comentarios.');
        window.open('','_parent','');
        window.close();
        </script>";
}


?>

                                


                                
                          