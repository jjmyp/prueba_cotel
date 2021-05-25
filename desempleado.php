
<?php
require_once 'persona.php';

class Desempleado extends Persona{

    private $codigo;
    private $profesion;
    private $salario_aspira;
    private $tiempo_desempleado;
}

$desempleado = new Desempleado("Jairo Alberto", "Rivera Ordoñez", "1143880320", 21, "Masculino", "1999-11-27");


echo "<h1>Funcion GetFullName</h1>";


echo "<h4>".$desempleado->getfullName(). "</h4>";
echo "<br>";