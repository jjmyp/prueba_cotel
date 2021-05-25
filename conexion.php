<?php

require_once 'configuracion.php';

class Conexion 
{

    public function Conectar(){
        $conexion = null;
        $url =  'mysql:host='.SERVIDOR.';dbname='.NOMBRE_DB;

        try {
            $pdoConexion = new PDO( $url, USUARIO, CONTRASENA);
            $pdoConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdoConexion->exec("SET CHARACTER SET utf8");
            
        } catch (PdoException $th) {
            echo $th;
        }

        return $pdoConexion;
    }

    
}
