<?php
require_once './config/db.php';

class mdlUsuario{
    static public function mdlBuscarUsuario($idusuario, $clave){
        $stmt= Db::conectar()->prepare("SELECT * FROM ASJ_USUARIOS WHERE IdUsuario = :idusuario AND Password = :clave");
        $stmt->bindParam(":idusuario", $idusuario, PDO::PARAM_STR);
        $stmt->bindParam(":clave", $clave, PDO::PARAM_STR);
        $stmt ->execute();
        return $stmt->fetch();
        $stmt->closeCursor();
        $stmt =null;
    }
}