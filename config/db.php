<?php
class Db{
    public static function conectar(){        
        $contraseña = 'usersql$$nisira';
        //$contraseña = '.1975Casa';
        $usuario = 'sa';
        $nombreBaseDeDatos = 'SATURNO_TEST';
        # Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto - \\MSSQLSERVER, 1433
        $rutaServidor = '192.168.1.7';        
        //$rutaServidor = 'JCHERO\SQLEXPRESS';      
        try {
        $conexion = new PDO("sqlsrv:Server=$rutaServidor;Database=$nombreBaseDeDatos", $usuario, $contraseña);
        $conexion -> exec("set names utf8mb4");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $conexion;
        echo ' COnexion Exitosa: ';
        }
        catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
}