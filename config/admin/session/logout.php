<?php

$carpeta = $_SERVER['DOCUMENT_ROOT'].'/rmcab/temp/';    //Ruta de la carpeta

$directorio = @opendir($carpeta);    //Abrimos la carpeta
while ($archivo = @readdir($directorio))
{
    if( $archivo !='.' && $archivo !='..' )
        @unlink($carpeta.$archivo); //Borramos los archivos temporales
}
@closedir($directorio);  //Cerramos el directorio

//nombre de la sesi�n
@session_name("gestor");
//inicio de la sesi�n
@session_start();
//borrar la sesi�n
session_destroy();

$parametros_cookies = session_get_cookie_params();

setcookie(session_name(),0,1,$parametros_cookies["path"]);
//localizaci�n de inicio
header ("Location: index.php");
?>