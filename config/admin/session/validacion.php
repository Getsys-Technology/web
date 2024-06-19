<?php
//Inclusión del archivo de configuración
require_once("../config/function/config.php");
//Inicio de sesión
$login->session();
                    //Obtengo la dirección IP del usuario
                    $ip = getRealIP();
                    //Obtengo la id de la estacion segun la ip
                    $id_estacion = $bd->select_item("id_estacion","estacion","direccion_ip = '$ip'");
                    if(empty($id_estacion))
                        $id_estacion = $_POST['id_estacion'];
                    
                    //Declaración de variables de sesión
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
                    //Seleccion del nombre de la estación
                    $est = $bd->select_item("nombre","estacion","id_estacion = $id_estacion");
                    //Pasar la variable del nombre de estación a una de sesión
                    $_SESSION['estacion'] = $est;

//comprobar si el usuario existe
if(empty($usuario_aut))
{
    //Si no existe se muestra un alert y se devuelve a la página principal
       ?>
       <meta http-equiv="refresh" content="0;url=index.php">
       <script language="javascript">
            alert('Usuario o contraseña incorrecta.');
       </script>
       <?
}
else
        //Si existe se redirige al inicio
        header("Location: ../inicio/index.php");

?>