<?php
class ctrListado{

    static public function ctrgetListado(){

        $tabla="SAS_LISTADO_PERSONAL_PRO";
        $respuesta=mdlListado::mdlGetListadoPro($tabla);
        return $respuesta;
        require_once './view/pages/listado.php';
        }
}

