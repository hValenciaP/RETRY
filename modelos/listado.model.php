<?php 
require_once './config/db.php';
class mdlListado{
    public static function mdlGetListadoPro($tabla){
        $stmt= Db::conectar()->prepare("SELECT * FROM $tabla WHERE IDPLANILLA = 'OBR' AND NUMERO = 1");
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
        $stmt =null;
    }
}