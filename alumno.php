
<?php

require_once 'persona.php';


class Alumno extends Persona{
    private $codigo;
    private $programa;
    private $semestre;
    private $creditos;
    
}

$alumno1 = new Alumno("Jairo Alberto", "Rivera Ordoñez", "1143880320", 21, "Masculino", "1999-11-27");


echo "<h1>Funcion GetFullName</h1>";


echo "<h4>".$alumno1->getfullName(). "</h4>";
echo "<br>";