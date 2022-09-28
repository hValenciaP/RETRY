<?php
class controladorListado{

    static public function getListadoPro(){

        $tabla = "SAS_LISTADO_PERSONAL_PRO";
        $listado = modeloListado::getListadoPro($tabla);
        return $listado;
        require_once '../vistas/paginas/listado.php';
        }
}

