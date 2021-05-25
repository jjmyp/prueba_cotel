
<?php

require_once 'persona.php';

class Empleado extends Persona
{

    private  $codigo;
    private  $cargo;
    private  $salario; 

    

    
}

$empleado = new Empleado("Jairo Alberto", "Rivera Ordoñez", "1143880320", 21, "Masculino", "1999-11-27");


echo "<h1>Funcion GetFullName</h1>";


echo "<h4>".$empleado->getfullName(). "</h4>";
echo "<br>";


echo "<h1>Funcion EdadMayor</h1>";


$data = $empleado->EdadMayor();

echo "<p><strong>Empleado:</strong><h4>   " .$data['nombre']. " ". $data['apellido']."</h4></p>";
echo "<p><strong>Edad:</strong><h4>  " .$data['edad']."</h4> </p>";

echo "<h1>Funcion Promedio de edad</h1>";



$data = $empleado->PromedioEdad();


echo "<h4>". number_format($data) . "</h4>";



//Ejecutar Actualizacion
$empleado->ActualizarEdad();
