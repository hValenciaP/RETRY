<?php
class controladorListado{

    static public function getListadoPro(){

        $tabla="SAS_LISTADO_PERSONAL_PRO";
        $respuesta=modeloListado::GetListadoPro($tabla);
        return $respuesta;
        require_once './view/pages/listado.php';
        }
}

