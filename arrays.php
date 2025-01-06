<?php
/*
Imagina que comenzaste a ir al gimnasio y has creado la siguiente rutina de ejercicios que realizarás 
de lunes a viernes:

lunes: Pecho, Espalda, Hombros,
martes: Piernas, Glúteos, 
miércoles: Bíceps, Espalda, Hombros,
jueves: Tríceps, Bíceps,
viernes: Piernas, Pantorrillas

Ahora, para que no se te olvide decides escribir un programa que almacene cada rutina y para saber 
qué ejercicio te toca simplemente debes colocar el nombre del día de la semana y esto te arrojará 
la rutina a realizar. Por ejemplo: Lunes: Tienes rutina de Pecho, Espalda y Hombros.

 
*/

// Crear el arreglo $rutinas
$rutinas = array(
    
    "lunes" => "Pecho, Espalda, Hombros",
    "martes" => "Piernas, Glúteos",
    "miércoles" => "Bíceps, Espalda, Hombros",
    "jueves" => "Tríceps, Bíceps",
    "viernes" => "Piernas, Pantorrillas"

);

// Imprimir los resultados
echo "Lunes: Tienes rutina de " . $rutinas["lunes"] . ".\n";
echo "Martes: Tienes rutina de " . $rutinas["martes"] . ".\n";
echo "Miércoles: Tienes rutina de " . $rutinas["miércoles"] . ".\n";
echo "Jueves: Tienes rutina de " . $rutinas["jueves"] . ".\n";
echo "Viernes: Tienes rutina de " . $rutinas["viernes"] . ".\n";
?>
