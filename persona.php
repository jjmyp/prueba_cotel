<?php
require_once 'conexion.php';

class Persona 
{
    public $db;
    public $nombre;
    public $apellido;
    public $id;
    public $edad;
    public $sexo;
    public $fecha_nacimiento;
    public $persona;
    public $resultado;

    public function __construct($Nombre, $Apellido, $Id, $Edad, $Sexo, $Fecha_nacimiento)
    {   
        $c = new Conexion();
        $this->db = $c->Conectar();
        $this->nombre = $Nombre;
        $this->apellido = $Apellido;
        $this->id = $Id;
        $this->edad = $Edad;
        $this->sexo = $Sexo;
        $this->fecha_nacimiento = $Fecha_nacimiento;
    }

    public function getfullName()
    {
        return $this->nombre. " ".$this->apellido;
    }

    public function EdadMayor(){
        $sql = 'SELECT * FROM personas ORDER BY edad DESC limit 1';
        $empleado = $this->db->query($sql);
        $response = $empleado->fetchAll();
        $this->resultado = $response[0];
        return $this->resultado;
    }

    public function PromedioEdad(){
        $sql = 'SELECT AVG(edad) AS promedio_edad FROM personas';
        $empleado = $this->db->query($sql);
        $response = $empleado->fetchAll();
        $this->resultado = $response[0]['promedio_edad'];
        return $this->resultado;
    }

    public function ActualizarEdad(){
        $sql = 'UPDATE personas SET edad = TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE())';
        $empleado = $this->db->prepare($sql);
        $empleado->execute();
        $empleado->closeCursor();
    }

}