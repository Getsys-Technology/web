<?php 
    require($_SERVER["DOCUMENT_ROOT"]."/local/admin/config/config.php");
    
    //Inicio desesión
    $login->session();
    //Si no esta iniciada la sesión vamos al login
    if(empty($usuario)) header ("Location: session/index.php");
    //En caso contrario iniciamos la graficación
    else{
    
    $tit = "Seleccionador ciudad";
    cab($tit)
?>
            <div id="div_gen_admin">
                <div id="div_tit">
                    BIENVENIDO
                </div>
                <div align="center">
                    <hr size="1"/>
                    
                    <div align="center" style="width: 450px;border: 1px solid #111;margin: 10px;padding: 15px;background-color: #fff;">
                        <form action="index.php" name="form" method="get">
                        
                            Seleccione ciudad en la que desea trabajar: 
                            <br/><br/>
                            <select id='id_ciu' name="id_ciu">
                                <option value="x">...Seleccione...</option>
                                <?php $bd->select_for_option("id, nombre","ciudad") ?>
                            </select>
                            <input type="button" id="entrar" value="Entrar"/>                                                          
                            <hr size="1"/>
                            <div id="error" style="text-align: center;"></div>
                            
                            <script>
                                $(document).ready(function(){
                                    $("#entrar").click(function () {
                                        if($("#id_ciu").val() == "x"){
                                            $("#error").css("display", "block");
                                            $("#error").empty();
                                            $("#error").append("Seleccione una ciudad!");
                                        }
                                        else{
                                            $("#error").css("display", "none");
                                            document.form.submit();                                            
                                        }
                                    });
                                });
                            </script>
                        </form>
                    </div>
                    
                    <hr size="1" style="margin-bottom: 25px;"/>
                </div>
            </div>
        
<?php
    fin_();
    }
?>           
    