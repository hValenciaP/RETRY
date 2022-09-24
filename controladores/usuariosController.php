<?php

class ControladorUsuario{
    public static function ctrLoginUsuario(){
        if(isset($_POST['txt_user'])){

        if(preg_match('/^[A-Z]+$/', $_POST["txt_user"]) && 
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["txt_clave"])) {
            $idusuario = $_POST['txt_user'];
            $clave = $_POST['txt_clave'];
            
            $stmt = mdlUsuario::mdlBuscarUsuario($idusuario, $clave);

            if(isset($stmt["IdUsuario"]) && $stmt["IdUsuario"] == $idusuario){
                if(isset($stmt["Password"]) && $stmt["Password"] == $clave ){
                    
                    $_SESSION['login'] = 'ok';
                    echo '<script>

                            window.location = "inicio";

                        </script>';
                }else{
                    echo '<br>
                    <div class="alert alert-warning">Contraseña Incorrecta, vuelva a intentarlo</div>';
                }
            }else{
                echo '<br>
                        <div class="alert alert-danger">Este Usuario no existe, Comuniquese con el administrador del sistema</div>';
            }
    }
}else {
    
}
    }
}