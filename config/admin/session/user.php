<?php
//Inclusi�n del archivo de configuraci�n
require_once("../config/function/config.php");

                    //Declaraci�n de variables de sesi�n
                    $usuario = $_POST['user'];

                    //Seleccion del nombre de la estaci�n
                    $acceso = $bd->select_items("acceso, activo","usuarios_rmcab","usuario = '$usuario'");

                    if($acceso[0] == 0){
?>
                        <script type="text/javascript">
                            $(document).ready(function(){                                
                                $(".est").css("display", "none");
                            });
                        </script>
<?php
                    }
                    else{
?>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $(".est").css("display", "block");
                            });
                        </script>
<?php
                    }
                  if($acceso[1] == 0){
?>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#enviar").css("display", "none");
                                $("#enviar_f").css("display", "block");
                                $("#enviar_f").empty();
                                $("#enviar_f").append("Usuario inactivo, consulte con el director.");
                            });
                        </script>
<?php
                    }

?>