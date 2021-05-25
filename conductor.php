
<?php

require_once('empleado.php');


final class Conductor extends Empleado{
    
    private $codigo;
    private $categoria;
    private $experiencia;
    

    public function FechaNacimientoEdad(){
        $sql = 'SELECT fecha_nacimiento, edad FROM personas LIMIT 1';
        $empleado = $this->db->query($sql);
        $response = $empleado->fetchAll();
        $this->resultado = $response[0];
        return $this->resultado; 
    }

}


$conductor = new Conductor("Jairo Alberto", "Rivera Ordoñez", "1143880320", 21, "Masculino", "1999-11-27");

$data2 = $conductor->FechaNacimientoEdad();
echo "<br>";



echo "<h1>Funcion fecha nacimiento  y edad del Conductor</h1>";

$data = $conductor->FechaNacimientoEdad();


echo "Edad:".$data['edad']."<br>";
echo "Fecha nacimiento:".$data['fecha_nacimiento'];