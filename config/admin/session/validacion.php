<?php
//Inclusi�n del archivo de configuraci�n
require_once("../config/function/config.php");
//Inicio de sesi�n
$login->session();
                    //Obtengo la direcci�n IP del usuario
                    $ip = getRealIP();
                    //Obtengo la id de la estacion segun la ip
                    $id_estacion = $bd->select_item("id_estacion","estacion","direccion_ip = '$ip'");
                    if(empty($id_estacion))
                        $id_estacion = $_POST['id_estacion'];
                    
                    //Declaraci�n de variables de sesi�n
                    $_SESSION['usuario'] = $_POST['usuario'];
                    $_SESSION['password'] = $_POST['pass'];
                    $_SESSION['id_estacion'] = $id_estacion;
                    $estacion = $_SESSION['id_estacion'];
                    $usuario = $_SESSION['usuario'];
                    $pass = $_SESSION['password'];
                    //seleccion de usuario en la BD
                    $usuario_aut = $bd->select_item("usuario","usuarios_rmcab","usuario = '$usuario' AND password = '$pass'");
                    //seleccion de acceso del usuario
                    $acceso = $bd->select_item("acceso","usuarios_rmcab","usuario = '$usuario' AND password = '$pass'");
                    //Seleccion del nombre de la estaci�n
                    $est = $bd->select_item("nombre","estacion","id_estacion = $id_estacion");
                    //Pasar la variable del nombre de estaci�n a una de sesi�n
                    $_SESSION['estacion'] = $est;

//comprobar si el usuario existe
if(empty($usuario_aut))
{
    //Si no existe se muestra un alert y se devuelve a la p�gina principal
       ?>
       <meta http-equiv="refresh" content="0;url=index.php">
       <script language="javascript">
            alert('Usuario o contrase�a incorrecta.');
       </script>
       <?
}
else
        //Si existe se redirige al inicio
        header("Location: ../inicio/index.php");

?>