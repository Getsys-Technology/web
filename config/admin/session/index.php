<?php
//Inclusión de los archivos de configuración y funciones
require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");

//Destrucción de sesión e inicio desesión
@session_destroy();
$login->session();
//Titulo, función de inicio y cabecera
    $titulo = "Login";

    cab($titulo);
//Graficación de login para el usuario
?>
<script type='text/javascript' src='../config/js/val.js'></script>

    <table border="0" align="center" width="900" bgcolor="#ffffff" cellpadding="0" cellspacing="0" style="border: 1px solid #aaaaaa;margin-bottom: 10px;">
        <tr class="content"><td align="center">
            <form action="validacion.php" id="validacion" method="post">
                <br><br>
                <fieldset style="text-align:left;width:270px;color:#111111;font-weight:bold;">
                    <legend>Inicio de sesión</legend>
                    <br><br>
                        <table cellpadding="2" align="center">
                                <tr><td>Usuario:</td></tr>
                                <tr><td><input type="text" id="user_name" name="usuario" value="" maxlength="20"/></td></tr>
                                <tr><td>Clave:</td></tr>
                                <tr><td><input type="password" id="user_pass" name="pass" value="" maxlength="20"/><input type="hidden" id="val"></td></tr>                                
                                
                                <tr align="center"><td style="padding:23px;">
                                        <input type="button" id="enviar" value="Iniciar sesi&oacute;n"/>
                                        <br><br>
                                        <div id="enviar_f" style="background-color:#D9AFAF;width:200px;padding: 20px;"></div>
                                </tr>
                        </table>
                </fieldset>
                <br><br><br>
            </form>
        </td></tr>
<?php fin_() ?>